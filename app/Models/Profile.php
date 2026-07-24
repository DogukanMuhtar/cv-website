<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title',
        'intro',
        'about',
        'location',
        'phone',
        'email',
        'website',
        'profile_image',
    ];
        }
