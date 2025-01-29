<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    // protected $fillable = ['name'];

    public function jobs()
    {
        return $this->belongsToMany(Job::class, relatedPivotKey: "tag_id");
    }
}
