<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\JobListing;

class Application extends Model
{
    use HasFactory;
    
    protected $fillable = ['cv', 'cover_letter', 'status', 'user_id', 'job_id'];

    public function user() {
        return $this->belongsTo(User::Class);
    }

    public function joblisting() {
        return $this->belongsTo(JobListing::Class);
    }

}
