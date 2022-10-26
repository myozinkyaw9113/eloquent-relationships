<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'user_id',
        'website_url',
        'github_url',
        'facebook_url'
    ];

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
