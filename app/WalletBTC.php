<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletBTC extends Model
{
    protected $table = 'wallet_btc';

    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
    public $timestamps = true;
    protected $primaryKey = 'id';
}
