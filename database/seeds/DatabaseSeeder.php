<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}

class CategoryTableSeedere extends Seeder {

  public function run() {
    Category::create(['id'=>'1', 'name'=>'Eletronic']);
    Category::create(['id'=>'2','name'=>'Groceery']);
    Category::create(['id'=>'11','name'=>'Computer']);
    Category::create(['id'=>'12','name'=>'Phone']);
    Category::create(['id'=>'21','name'=>'Food']);
    Category::create(['id'=>'22','name'=>'Drinks']);
  }
}
