<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiBTX extends Model
{
    protected $table = 'transaksi_btx';

    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
    public $timestamps = true;
    protected $primaryKey = 'id';
}
