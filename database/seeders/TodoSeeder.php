<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([
            'title' => 'Sport',
            'Description' => 'It is very cool',
            'is_completed' => 0
        ]);
        Todo::create([
                'title' => 'Work',
                'Description' => 'Work 10 hour at day',
                'is_completed' => 0
        ]);
        Todo::create([
            'title' => 'Money',
            'Description' => 'Earn 10,000$ in six months', 'is_completed' => 0
            ]);
    }
}
