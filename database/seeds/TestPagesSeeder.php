<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class TestPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_pages')->insert([
            'name' => Str::random(8),
            'email'=> Str::random(10).'@gmail.com',
            'age'=>rand(1,100)
        ]);
    }
}
