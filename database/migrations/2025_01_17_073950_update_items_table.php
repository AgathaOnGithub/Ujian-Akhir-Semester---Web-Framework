<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            // Tambahkan kolom baru jika belum ada
            if (!Schema::hasColumn('items', 'image')) {
                $table->string('image')->nullable()->after('category');
            }
            if (!Schema::hasColumn('items', 'year')) {
                $table->integer('year')->nullable()->after('image');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            // Hapus kolom jika ingin rollback
            if (Schema::hasColumn('items', 'image')) {
                $table->dropColumn('image');
            }
            if (Schema::hasColumn('items', 'year')) {
                $table->dropColumn('year');
            }
        });
    }
}
