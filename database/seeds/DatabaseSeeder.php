<?php

use Illuminate\Database\Seeder;
use SDSLabs\Quark\Database\Seeds\DatabaseSeeder as QuarkSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(QuarkSeeder::class);
    }
}
