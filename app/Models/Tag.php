<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Pest\Laravel\post;

class Tag extends Model
{
    use HasFactory;

    public function jobs(){
        return $this->belongsToMany(Job::class,relatedPivotKey:"job_listing_id");
    }
    public function posts(){
        return $this->belongsToMany(Post::class, relatedPivotKey:"post_id");
    }
}

//multiple tags belongs to many jobs 