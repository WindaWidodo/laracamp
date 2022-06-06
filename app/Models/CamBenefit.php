<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamBenefit extends Model
{
    use HasFactory;

    // file database yg bisa di isikan
    protected $fillable = ['name'];
}
