<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\KycDocumentMaster;
use DB;

class KycVerificationMaster extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kyc_verification_master';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "sender_id",
        "billing_address_id",
        "profile_type",
        "company_type",
        "company_name",
        "pan_no",
        "gst_no",
        "created_by",
       
    ];

    function kyc_document_master(){
        $url = url('storage/images/kyc');
        return $this->hasMany(KycDocumentMaster::class, 'kyc_id')->select(['id', 'kyc_id','doc_id', DB::raw("CONCAT('$url/', image) AS image")]);
    }

   
}
