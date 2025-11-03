<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(5)->create([]);

        Collection::create(['user_id' => 1 , 'name' => 'Laravel' ]);
        Collection::create(['user_id' => 1 , 'name' => 'Sql' ]);
        Collection::create(['user_id' => 2 , 'name' => 'Future plans' ]);

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
          'user_id'=> 1,
          'title' => 'Note 4', 
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet officiis fugiat rem at delectus corporis quia. Illo eius soluta pariatur alias nostrum molestiae quo, adipisci consequatur sint earum impedit mollitia..'
        ]);
        Task::create([
          "user_id" => 3,
          'title' => 'Note 5',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at nesciunt libero quos neque doloribus, pariatur aperiam ipsa, suscipit numquam aliquam quidem, illum repellendus nemo dolores quasi praesentium saepe nam?'
        ]);

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
