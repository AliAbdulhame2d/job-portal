<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function company() {
        return $this->belongsTo(Company::Class);
    }

    public function applications() {
        return $this->hasMany(Application::Class);
    }
}
