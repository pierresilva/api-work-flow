<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    //
    protected $fillable = [
        'name',
        'porcentage',
        'value',
    ];

    protected $table = 'taxes';

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    protected $primaryKey = 'id';
}
