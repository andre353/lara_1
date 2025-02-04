<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function jobs()
    {
        return $this->hasMany(Job::class, foreignKey: "employer_id");
    }

    public function user()
    {
        return $this->hasMany(User::class, foreignKey: "employer_id");
    }
}
