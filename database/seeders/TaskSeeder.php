<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Task::factory()->create(['title' => 'Note 1', 'description' => 'Task management projec written by Maxkamjon Abdumannobov.']);
        Task::factory()->create(['title' => 'Note 2', 'description' => 'Php, Laravel and Sqlite used.']);
        Task::factory()->create(['title' => 'Note 3', 'description' => 'Good luck! Enjoy the test.']);
    }
}
