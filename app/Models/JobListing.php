<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Company;
use App\Models\Application;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'salary', 'type', 'is_active', 'company_id',];

    public function company() {
        return $this->belongsTo(Company::Class);
    }

    public function applications() {
        return $this->hasMany(Application::Class);
    }
}
