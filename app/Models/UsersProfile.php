<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProfile extends Model
{
    protected $table = 'users_profile';
    protected $fillable = ['users_id','name', 'photograph','address','phone_number'];
    public $timestamps = false;

    use HasFactory;
}
