<?php

use App\Models\Employer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //up means apply the operation whatever you wanna do
    //do the thing
    public function up(): void
    {
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->unsignedBigInteger('employer_id');
            $table->foreignIdFor(App\Models\Employer::class);
            $table->string('salary');
            $table->timestamps();
        });
    }
    //start creating according to the job class 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    //undo the thing
    {
        Schema::dropIfExists('job_listings');
    }
};

//hence if doing the thing is creating a table the undo is dropping the table
//add a column or remove a column
