<?php

namespace App\Models;

use App\Mail\PaymentReminder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public $fillable = [
        'orderId',
        'hash',
        'status',
        'firstname',
        'lastname',
        'email',
        'street',
        'zip',
        'city',
        'phone',
        'donation',
        'optin',
        'orderUrl'
    ];

    protected $casts = [
        'optin' => 'boolean',
    ];

    /**
     * Send a reminder to the customer.
     */
    public function sendReminder(): void
    {
        // Send an email to the customer.
        try {
            Mail::to($this->email)->send(new PaymentReminder($this));
        } catch (\Exception $e) {
            // Log the error.
            Log::error($e->getMessage());
        }
    }
}
