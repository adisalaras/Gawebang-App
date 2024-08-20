<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WalletTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'amount',
        'type',
        'is_paid',
        'proof',
        'bank_name',
        'bank_account_name',
        'bank_account_number',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
