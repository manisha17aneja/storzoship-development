<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\BillingAddress;
use App\Models\KycVerificationMaster;
use App\Models\KycDocumentMaster;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'name',
        'company_name',
        'email',
        'password',
        'phone',
        'type',
        'status',
        'is_active',
        'facebook_id',
        'google_id',
        'allow_credit',
        'allow_credit_limit',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
    function billing_address(){
        return $this->hasOne(BillingAddress::class);
    }

    function kyc_verification_master(){
        return $this->hasOne(KycVerificationMaster::class , 'sender_id','id');
    }

    
}
