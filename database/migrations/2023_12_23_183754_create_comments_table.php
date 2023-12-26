<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('author_id');
            $table->text('body');
            $table->string('image')->nullable;
            $table->unsignedBigInteger('like')->nullable();
            $table->unsignedBigInteger('dislike')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index('author_id','comment_author_idx');
            $table->foreign('author_id','comment_author_fk')->on('users')->references('id');
            $table->index('post_id','comment_post_idx');
            $table->foreign('post_id','comment_post_fk')->on('posts')->references('id');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
