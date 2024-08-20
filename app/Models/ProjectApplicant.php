<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectApplicant extends Model
{
    use HasFactory;

    public function freelancer(){
        return $this->belongsTo(User::class, 'freelancer_id');
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
