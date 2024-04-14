<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilty extends Model
{
    protected $table = 'bilties'; // Change this to your actual table name

   protected $fillable = [
        'customer', 'item', 'track_no', 'track_read', 'factory',
        'quantity', 'costPackage', 'totalCost', 'preBalance',
        'payment', 'now_balance', 'remarks', 'sms_notification'
    ];

}
