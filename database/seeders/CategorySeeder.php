<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'INTERNAL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'EXTERNAL', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
