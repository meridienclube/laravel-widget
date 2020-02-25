<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('view');
            $table->string('service')->nullable();
            $table->text('description');
            $table->timestamps();
        });

        /**
         * Tabela que relaciona as opções aos widgets
         */
        Schema::create('option_widget', function (Blueprint $table) {
            $table->unsignedBigInteger('option_id');
            $table->unsignedBigInteger('widget_id');
            $table->timestamps();

            $table->foreign('option_id')
                ->references('id')
                ->on('options')
                ->onDelete('cascade');

            $table->foreign('widget_id')
                ->references('id')
                ->on('widgets')
                ->onDelete('cascade');

            $table->primary(['option_id', 'widget_id']);
        });

        Schema::create('widgetgables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('widget_id');
            $table->morphs('widgetgable');
            $table->json('options')->nullable();
            $table->integer('order')->default(1);
            $table->timestamps();

            $table->foreign('widget_id')
                ->references('id')
                ->on('widgets')
                ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('widgetgables');
        Schema::dropIfExists('option_widget');
        Schema::dropIfExists('widgets');
    }
}
