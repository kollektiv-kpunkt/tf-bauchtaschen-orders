<?php

namespace App\Console\Commands;


use Carbon\Carbon;
use Illuminate\Console\Command;

class PaymentReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remind people who haven\'t paid yet.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $orders = \App\Models\Order::where('status', '!=', 'paid')->where('reminders', '<', 3)->where('created_at', '<=', Carbon::now()->subHours(8)->toDateTimeString())->get();

        foreach ($orders as $order) {
            $order->reminders++;
            $order->save();
            $order->sendReminder();
        }

        $overdues = \App\Models\Order::where('status', '!=', 'paid')->where('reminders', '>=', 3)->get();
        foreach ($overdues as $overdue) {
            $overdue->status = 'overdue';
            $overdue->save();
        }
    }
}
