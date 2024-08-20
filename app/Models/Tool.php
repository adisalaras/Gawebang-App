<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    public function projects(){
        return $this->belongsToMany(Project::class, 'project_tools', 'tool_id', 'project_id')
        ->wherePivotNull('deleted_at')
        ->withPivot('id');
    }
}
