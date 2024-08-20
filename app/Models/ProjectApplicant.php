<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectApplicant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'project_id',
        'freelancer_id',
        'status',
        'message',
    ];

    public function freelancer(){
        return $this->belongsTo(User::class, 'freelancer_id');
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
