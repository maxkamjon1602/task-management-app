<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('task_collection')->insert([
            'collection_id' => 1,
            'task_id' => 2,
        ]);
       DB::table('task_collection')->insert([
            'collection_id' => 1,
            'task_id' => 3,
        ]);
        DB::table('task_collection')->insert([
            'collection_id' => 2,
            'task_id' => 4,
        ]); 
    }
}
