<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'student';

    protected $fillable = [
        'name',
        'mobile',
        'email',
        'fname',
        'class'
    ];
    public $timestamps = true;

}
