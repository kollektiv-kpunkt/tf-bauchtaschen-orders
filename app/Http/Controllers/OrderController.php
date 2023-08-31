<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
            'email' => 'required',
            'street' => 'required',
            'zip' => 'required',
            'city' => 'required',
            'phone' => 'nullable',
            'optin' => 'nullable'
        ]);
        $order = new Order();
        $order->orderId = Str::uuid();
        $order->hash = bin2hex(random_bytes(64));
        $order->fill($validated);
        $order->save();
        return redirect()->route('order.show', [
            "order" => $order,
            "rnw-stored_customer_firstname" => $order->firstname,
            "rnw-stored_customer_lastname" => $order->lastname,
            "rnw-stored_customer_email" => $order->email,
            "rnw-stored_customer_street" => $order->street,
            "rnw-stored_customer_zip_code" => $order->zip,
            "rnw-stored_customer_city" => $order->city
        ]);
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
        file_put_contents(storage_path("logs/webhook.log"), json_encode($request->all()) . "\n", FILE_APPEND);
    }
}
