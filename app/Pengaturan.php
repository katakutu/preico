<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'settings';

    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
    public $timestamps = true;
    protected $primaryKey = 'id';
}
