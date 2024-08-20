<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function owner(){
        return $this->belongsTo(User::class, 'client_id', 'id');
    }
    public function tools(){
        return $this->belongsToMany(Tool::class, 'project_tools', 'project_id', 'tool_id')
        ->wherePivotNull('deleted_at')
        ->withPivot('id');
    }
    public function applicants(){
        return $this->hasMany(ProjectApplicant::class);
    }
}
