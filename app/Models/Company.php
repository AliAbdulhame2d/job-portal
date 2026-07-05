<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\JobListing;

class Company extends Model
{

    protected $fillable = ['name', 'location', 'phone', 'email', 'description', 'website', 'user_id'];

    public function user() {
        return $this->belongsTo(User::Class);
    }

    public function joblistings() {
        return $this->hasMany(JobListings::Class);
    }

}
