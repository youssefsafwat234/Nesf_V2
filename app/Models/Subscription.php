<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'status',
        'price',
        'subscription_type',
        'advertisement_number',
        'description',
    ];
}
