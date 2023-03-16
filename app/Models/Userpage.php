<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userpage extends Model
{
    use HasFactory;

    protected $table='userpage';
    protected $fillable = [
        'fname',
        'lname',
        'user',
        'password'
    ];

}
