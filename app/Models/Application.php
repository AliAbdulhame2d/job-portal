<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['cv', 'cover_letter', 'status', 'user_id', 'job_id'];

    public function user() {
        return $this->belongsTo(User::Class);
    }

    public function job() {
        return $this->belongsTo(Job::Class);
    }

}
