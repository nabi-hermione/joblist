<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  

class ListJobs extends Model
{
    use HasFactory;
    protected $table = 'job_listing';

    protected $fillable = [
        'title',
        'job_description',
        'salary',
    ];
}
