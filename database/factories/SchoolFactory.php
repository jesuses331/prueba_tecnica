<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use App\Models\Director;
use App\Models\Hs;
use App\Models\Region;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
            return [
                'hs_id' => Hs::inRandomOrder()->first()->id,
                'director_id' => Director::inRandomOrder()->first()->id,
                'country_id' => Country::inRandomOrder()->first()->id,

                'region_id' => Region::inRandomOrder()->first()->id,
                'city_id' => City::inRandomOrder()->first()->id,

                'name' => $this->faker->name,
                'postal' => $this->faker->postcode,
                'phone' => $this->faker->phoneNumber,
                'password' => $this->faker->password,
                'email' => $this->faker->unique()->email,
                'email2' => $this->faker->unique()->email,
                'website' => $this->faker->url,
                'fax' => $this->faker->phoneNumber,
                'address' => $this->faker->address,
                'address_short' => $this->faker->streetAddress,
                'latitude' => $this->faker->latitude,
                'longitude' => $this->faker->longitude,
                'leads' => $this->faker->randomElement([18, 4, 3, 1, 0, 6, 18]),
                'business_status' => $this->faker->randomElement(['OPERATIONAL', 'CLOSED_PERMANENTLY']),
                'google_user_ratings_total' => $this->faker->numberBetween(5, 50),
                'google_rating' => $this->faker->numberBetween(3, 5),
                'revisor' => $this->faker->randomElement(['Gabriela Guardado', 'Daniel Perez', 'Binbin Ji Huang ', 'Irene Sanchez']),

            ];
       
    }
}
