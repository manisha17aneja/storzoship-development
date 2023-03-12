<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class WalletTransaction extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wallet_transaction';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sender_id',
        'order_id',
        'debit',
        'credit',
        'runningbalance',
        'remarks',
        'created_by',
    ];

   
}
