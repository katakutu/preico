<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ICO extends Model
{
    protected $table = 'ico';

    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
    public $timestamps = true;
    protected $primaryKey = 'id';
}
