<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
}
