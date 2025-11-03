<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Collection::create(['user_id' => 1 , 'name' => 'Laravel' ]);
        Collection::create(['user_id' => 1 , 'name' => 'Sql' ]);
        Collection::create(['user_id' => 2 , 'name' => 'Future plans' ]);
    }
}
