<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlaced;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:orders',
            'street' => 'required',
            'zip' => 'required',
            'city' => 'required',
            'phone' => 'nullable',
            'optin' => 'nullable'
        ], [
            'email.unique' => 'Mit dieser E-Mail-Adresse wurde bereits eine Bestellung getätigt. Sorry, wir können nur eine Bestellung pro E-Mail-Adresse annehmen.',
            'required' => 'Bitte fülle dieses Feld aus.'
        ]);
        $order = new Order();
        $order->orderId = Str::uuid();
        $order->hash = bin2hex(random_bytes(64));
        $order->fill($validated);
        $redirect = redirect()->route('order.show', $order);
        $order->orderUrl = $redirect->getTargetUrl();
        $order->save();
        try {
            Mail::to($request->email)
                ->cc(env('MAIL_FROM_ADDRESS'))
                ->send(new OrderPlaced($order));
                return $redirect;
        } catch (\Exception $e) {
            return response()->json([
                "status" => "error",
                'message' => 'Something went wrong. Please try again later.',
                "errors" => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {

        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    /**
     * Handle the webhook from the payment provider.
     */
    public function hook(Request $request)
    {
        $validated = $request->validate([
            "stored_orderId" => "required",
            "stored_hash" => "required",
            "amount" => "required"
        ]);
        $validated["amount"] = $validated["amount"] / 100;
        $order = Order::where("orderId", $validated["stored_orderId"])->firstOrFail();
        if ($order->hash !== $validated["stored_hash"]) {
            abort(403);
        }
        $order->donation = $order->donation + $validated["amount"];
        if ($order->donation >= env("MIN_DONATION", 15)) {
            $order->status = "paid";
        }
        $order->save();
    }

    /**
     * Export all orders to Excel.
     */
    public function export()
    {
        return Excel::download(new OrderExport, now() . "-orders.xlsx");
    }
}
