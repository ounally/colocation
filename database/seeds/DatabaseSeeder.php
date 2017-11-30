<?php

use Illuminate\Database\Seeder;
use colocation\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(colocation\User::Class,20)->create();
    }
}
