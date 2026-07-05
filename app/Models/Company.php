<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = ['name', 'location', 'phone', 'email', 'description', 'website', 'user_id'];

    public function jobs() {
        return $this->hasMany(Job::Class);
    }

    public function user() {
        return $this->belongsTo(User::Class);
    }
}
