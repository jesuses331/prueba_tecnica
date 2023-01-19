<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Director;
use App\Models\Hs;
use App\Models\Region;
use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory(100)->create();
        Region::factory(100)->create();
        City::factory(100)->create();
        Hs::factory(100)->create();
        Director::factory(100)->create();
        School::factory(100)->create();
    }
}
