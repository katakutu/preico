<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiBlock extends Model
{
    protected $table = 'transaksi_block';

    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
    public $timestamps = true;
    protected $primaryKey = 'id';
}
