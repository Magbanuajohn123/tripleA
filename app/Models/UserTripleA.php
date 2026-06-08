<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTripleA extends Model
{
    protected $table = '_triple_a__user';

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
