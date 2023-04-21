<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [

        'application_id',
        'employer_id',
        'worker_id',
    ];    

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }    
    
    public function worker()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }      
    
    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }      
}
