<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Address extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
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
