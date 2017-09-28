<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //video tags
        factory(App\Answer::class, 20)->create();
        factory(App\Comment::class, 'answer', 40)->create();
    }
}
