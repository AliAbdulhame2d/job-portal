<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function user() {
        return $this->belongsTo(User::Class);
    }

    public function job() {
        return $this->belongsTo(Job::Class);
    }

}
