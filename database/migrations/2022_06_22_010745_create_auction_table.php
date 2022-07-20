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
        Schema::create('auction', function (Blueprint $table) {
            $table->id();
            $table->string('auction_title');
            $table->string('start_date');
            $table->string('start_time');
            $table->string('end_date');
            $table->string('end_time');
            $table->string('live_start_date');
            $table->string('live_start_time');
            $table->string('live_end_time');
            $table->string('reserve_price');
            $table->string('minimum_bid_price');
            $table->boolean('buy_now');
            $table->string('buy_now_price')->nullable();
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_image');
            $table->integer('num_bids');
            $table->string('condition');
            $table->string('district');
            $table->string('street_address');
            $table->string('bid_increment');
            $table->string('current_bid');
            $table->string('auction_status')->default('PENDING');
            $table->integer('winner_id')->default(0);
            $table->foreignId('fk_category')->constrained('category');
            $table->foreignId('fk_subcategory')->constrained('sub_category');
            $table->foreignId('fk_user')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auction');
    }
};
