<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'name',
        'group_name',
        'login_at',
    ];
}
