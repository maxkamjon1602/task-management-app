<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Task::create([
          'user_id'=> 1,
          'title' => 'Note 4', 
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet officiis fugiat rem at delectus corporis quia. Illo eius soluta pariatur alias nostrum molestiae quo, adipisci consequatur sint earum impedit mollitia..'
        ]);
        Task::create([
          'user_id'=> 1,
          'title' => 'Note 1', 
          'description' => 'Task management update using new OpenAI OpenAPI/Swagger.'
        ]);
        Task::create([
          'user_id' => 1,
          'title' => 'Note 2', 
          'description' => 'Production-grade API docs written for a Laravel Project.'
        ]);
        Task::create([
          "user_id" => 2,
          'title' => 'Note 3', 
          'description' => 'The project showcases structure, annotations and repeatable workflow.'
        ]);
        Task::create([
          "user_id" => 3,
          'title' => 'Note 5',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at nesciunt libero quos neque doloribus, pariatur aperiam ipsa, suscipit numquam aliquam quidem, illum repellendus nemo dolores quasi praesentium saepe nam?'
        ]);
    }
}
