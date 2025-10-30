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
        Task::factory()->create(['title' => 'Note 1', 'description' => 'Task management update using new OpenAI OpenAPI/Swagger.']);
        Task::factory()->create(['title' => 'Note 2', 'description' => 'Production-grade API docs written for a Laravel Project.']);
        Task::factory()->create(['title' => 'Note 3', 'description' => 'The project showcases structure, annotations and repeatable workflow.']);
    }
}
