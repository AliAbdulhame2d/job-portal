<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Application;

class JobListing extends Model
{
    protected $fillable = ['title', 'description', 'salary', 'type', 'is_active', 'company_id',];

    public function company() {
        return $this->belongsTo(Company::Class);
    }

    public function applications() {
        return $this->hasMany(Application::Class);
    }
}
