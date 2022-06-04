<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    protected $fillable = ['name' , 'email' , 'password'];
    use HasFactory;
}
