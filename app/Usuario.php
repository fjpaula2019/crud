<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Compos a serem utiizados
    protected $fillable =[
        'name','email',
    ];
}
