<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\EloquentModel;

class ExampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('exampletable')->insert([
            'name'=>'Alireza',
            'email'=> 'Alireza' .'@gmail.com',
        ]);
    }
}
