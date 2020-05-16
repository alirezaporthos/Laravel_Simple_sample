<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<10 ; $i++){
            DB::table('posts')->insert([
                'title'=> Str::random(8),
                'body'=> Str::random(12)
            ]);
        }
    }
}
