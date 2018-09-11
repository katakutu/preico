<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiBTC extends Model
{
    protected $table = 'transaksi_btc';

    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
    public $timestamps = true;
    protected $primaryKey = 'id';
}
