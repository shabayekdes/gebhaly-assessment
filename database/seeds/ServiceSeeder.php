<?php

use Illuminate\Database\Seeder;
user App\Models\Service

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service::class, 3)->create();
    }
}
