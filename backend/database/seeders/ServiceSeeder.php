<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Service::factory(10)->create();

        // Service::factory()->create([
        //     'title' => 'Do Your Shopping',
        //     'location' => 'Barcelona',
        //     'description-sm' => 'I offer my time to elderly people to do whatever shopping they might need.',
        //     'description-lg' => 'I offer my time to elderly people to do whatever shopping they might need. I am from Barcelona and a taxi driver, so I know pretty much all the neighbourhoods to get the best deals from.',
        //     'email' => 'manuelyourfriend@gmail.com',
        // ]);

        // Service::factory()->create([
        //     'title' => 'Play Board Games',
        //     'location' => 'Madrid',
        //     'description-sm' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
        //     'description-lg' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'email' => 'paquita123@gmail.com',
        // ]);

        // Service::factory()->create([
        //     'title' => 'Digital Skills',
        //     'location' => 'Málaga',
        //     'description-sm' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
        //     'description-lg' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'email' => 'hackathonwinner@gmail.com',
        // ]);
    }
}
