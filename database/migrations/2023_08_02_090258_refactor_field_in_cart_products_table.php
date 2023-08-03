<?php

use App\Models\Cart;
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
        if (!Schema::hasColumn('cart_products', 'cart_id')) {
            Schema::table('cart_products', function (Blueprint $table) {
                $table->foreignIdFor(Cart::class, 'cart_id')->constrained()->onDelete('cascade');
                // echo '1';
            });
        }

        if (Schema::hasColumn('cart_products', 'user_id')) {
            Schema::table('cart_products', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            });
        }

        if (Schema::hasColumn('cart_products', 'product_color')) {
            Schema::table('cart_products', function (Blueprint $table) {
                $table->dropColumn('product_color');
            });
        }

        if (Schema::hasColumn('cart_products', 'product_size')) {
            Schema::table('cart_products', function (Blueprint $table) {
                $table->dropColumn('product_size');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (!Schema::hasColumn('cart_products', 'cart_id'))
            Schema::table('cart_products', function (Blueprint $table) {
                $table->dropColumn('cart_id');
            });

        if (!Schema::hasColumn('cart_products', 'user_id'))
            Schema::table('cart_products', function (Blueprint $table) {
                $table->foreignIdFor(Cart::class);
            });

        if (!Schema::hasColumn('cart_products', 'product_color'))
            Schema::table('cart_products', function (Blueprint $table) {
                $table->string('product-color');
            });
    }
};
