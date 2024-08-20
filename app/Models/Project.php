<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'about',
        'category_id',
        'client_id',
        'budget',
        'skill_level',
        'has_finished',
        'has_started',
    ];

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
