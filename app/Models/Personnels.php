<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnels extends Model
{
    protected $table = 'personnels';
    protected $fillable = ['name','surname', 'phone_number','address'];
    public $timestamps = false;

    use HasFactory;
}
