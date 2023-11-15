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
        Task::create([
            'title' => 'Ingles',
            'description' => 'verbo to be',
            'due_date' => '2023-11-15 08:02:54',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
