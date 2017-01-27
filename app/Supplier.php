<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    //
    protected $table = 'suppliers';
    protected $fillable = [
    	'name',
    	'nit',
    	'phone',
    ];
    protected $dates = [
    	'created_at',
    	'deleted_at',
    ];
}
