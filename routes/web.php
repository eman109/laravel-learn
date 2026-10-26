<?php
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('home');
});


Route::get('/jobs', function (){
    $jobs=Job::with('employer')->simplePaginate(3); 

    return view('jobs',[
        'jobs'=> $jobs
    ]);
});

Route::get('/jobs/create', function(){
    dd('hello there');

});

//this is a wild card means listen for jobs/anything including create hence adding
//jobs/create under it isnt working so if
//explicit->add it before the wild card
Route::get('/jobs/{id}',function($id) {
    $job=Job::find($id);

    return view('job',['job'=>$job]);
});



Route::get('/contact', function(){
    return view('contact');
});

