<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = [
        'orderId',
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
    ];

    protected $casts = [
        'optin' => 'boolean',
    ];
}
