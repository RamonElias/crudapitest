<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   // public function run()
   // {
   //    $this->call([
   //       UsersTableSeeder::class,
   //    ]);
   // }

   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      $this->call(UsersTableSeeder::class);
      $this->call(TestsTableSeeder::class);
   }
}

