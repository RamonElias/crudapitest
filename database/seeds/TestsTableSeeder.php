<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
   public function run()
   {
     factory(App\Test::class, 10)->create();
   }
}
