<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Shipping extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manage_price';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'logistic_id',
        'shipment_type',
        'rule',
        'rule_index',
        'within_city',
        'within_state',
        'within_zone',
        'metro',
        'metro_2',
        'rest_of_india',
        'rest_of_india_2',
        'special_zone',
        'is_cod_charge_return',
        
    ];
   

}
