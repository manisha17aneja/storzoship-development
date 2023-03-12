<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NextCodRemittanceList extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'next_cod_remittance_list';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

    ];

   
}
