<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletCoin extends Model
{
    protected $table = 'wallet_coin';

    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
    public $timestamps = true;
    protected $primaryKey = 'id';
}
