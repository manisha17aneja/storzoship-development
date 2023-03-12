<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class SenderAddressMaster extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sender_address_master';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sender_id',
        'warehouse_name',
        'contact_person_name',
        'contact_no',
        'contact_email',
        'website',
        'address_line_1',
        'address_line_2',
        'pincode',
        'state',
        'city',
    ];

   
}
