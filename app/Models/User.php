<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\Relations\UserRelations;

class User extends Model
{
    use HasFactory, UserRelations;

    protected $fillable = ['name', 'email'];

    protected $hidden = ['password'];
}
