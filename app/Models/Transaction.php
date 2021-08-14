<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = ['travel_packages_id', 
                            'user_id', 
                            'addiional_visa', 
                            'transaction_total', 
                            'transaction_tatus'];

    protected $hidden = [

    ];

    //relasi==================================
    public function details(){
        return $this->hasMany( TransactionDetail::class, 'transactions_id', 'id');
    }

    public function travel_package(){
        return $this->belongsTo( TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
