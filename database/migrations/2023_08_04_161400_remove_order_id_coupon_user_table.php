<?php

use App\Models\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(Schema::hasColumn('coupon_user', 'order_id'))
            Schema::table('coupon_user', function (Blueprint $table){
                $table->dropForeignIdFor(Order::class);
                $table->dropColumn('order_id');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(!Schema::hasColumn('coupon_user', 'order_id'))
            Schema::table('coupon_user', function (Blueprint $table){
                $table->foreignIdFor(Order::class);
                
            });
    }
};
