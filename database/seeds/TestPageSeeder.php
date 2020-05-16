<?php

use Illuminate\Database\Seeder;


class TestPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=0 ; $i<10 ; $i++){
            DB::table('test_pages')->insert([
                'name' => Str::random(8),
                'email'=> Str::random(10).'@gmail.com',
                'age'=>rand(1,100)

            ]);
        }
    }
}
