<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserShip extends Model
{
    use HasFactory;

    protected $fillable = ['ship_id', 'level', 'user_id'];
}
