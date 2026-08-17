<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
//way of grouping things to avoid future coliisions

class  Job extends Model{
    use HasFactory;
    
    protected $table='job_listings';
    //when we said its gonna have the same name as the table
    protected $fillable = ['title', 'salary'];

}