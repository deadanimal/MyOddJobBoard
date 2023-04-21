<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'credit_balance'
    ];      

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }    
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }      
}
