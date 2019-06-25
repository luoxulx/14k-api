<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('category_id')->unsigned()->nullable(false);
            $table->integer('user_id', false, true)->nullable(false);
            $table->tinyInteger('is_draft', false, true)->default(0)->comment('是否草稿');
            $table->integer('view_count', false, true)->default(0)->comment('点击查看计数');
            $table->string('title', 225)->nullable(false)->comment('title');
            $table->string('title2', 225)->nullable()->comment('title-临时字段');
            $table->string('slug')->unique()->nullable(false)->index()->comment('url slug for SEO');
            $table->string('source', 255)->nullable()->comment('来源网址');
            $table->mediumText('description')->nullable()->comment('描述');
            $table->string('thumbnail', 225)->nullable()->comment('缩略图');
            $table->longText('content')->nullable()->comment('主体内容json{raw,html}');
            $table->timestamp('published_at')->nullable()->comment('发布时间');

            $table->timestamps();
            $table->softDeletes();
        });

        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `articles` comment 'articles table'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
