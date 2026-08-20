<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
//way of grouping things to avoid future coliisions

class  Job extends Model{
    use HasFactory;

    protected $table='job_listings';

    protected $fillable = ['title', 'salary'];

    public function employer(){
        
        return $this->belongsTo(Employer::class);
    }
    public function tag(){
        
        return $this->belongsToMany(Tag::class, foreignPivotKey:"job_listing_id");
    }
    //tags belongs to and has many ralationships



}