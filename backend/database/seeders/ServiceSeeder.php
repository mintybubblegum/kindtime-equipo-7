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
    Service::factory()->create([
      'service-img' => 'img/digital-skills.jpg',
      'name' => 'Equipo 7',
      'title' => 'Digital Skills',
      'description-sm' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
      'description-lg' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation t, m id orum.',
      'location' => 'Málaga',
      'email' => 'hackathonwinner@gmail.com',
    ]);

    Service::factory()->create([
      'service-img' => 'img/do-your-shopping.jpg',
      'name' => 'Manuel',
      'title' => 'Do Your Shopping',
      'description-sm' => 'I offer my time to elderly people to do whatever shopping they might need.',
      'description-lg' => 'I offer my time to elderly people to do whatever shopping they might need. I am from Barcelona and a taxi driver, so I know pretty much all the neighbourhoods to get the best deals from.',
      'location' => 'Barcelona',
      'email' => 'manuelyourfriend@gmail.com',
    ]);

    Service::factory()->create([
      'service-img' => 'img/board-games.jpg',
      'name' => 'Paquita',
      'title' => 'Play Board Games',
      'description-sm' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
      'description-lg' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation t, m id orum.',
      'location' => 'Madrid',
      'email' => 'paquita123@gmail.com',
    ]);

    Service::factory()->create([
      'service-img' => 'img/book-club.jpg',
      'name' => 'Dolores',
      'title' => 'Book Club',
      'description-sm' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
      'description-lg' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation t, m id orum.',
      'location' => 'Granada',
      'email' => 'doloresofmysoul@gmail.com',
    ]);

    Service::factory()->create([
      'service-img' => 'img/go-to-the-doctor.png',
      'name' => 'Flavio',
      'title' => 'Go To The Doctor',
      'description-sm' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
      'description-lg' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation t, m id orum.',
      'location' => 'Oviedo',
      'email' => 'flavio74@gmail.com',
    ]);

    Service::factory()->create([
      'service-img' => 'img/sharing-moments.jpg',
      'name' => 'Chloe',
      'title' => 'Sharing Moments',
      'description-sm' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
      'description-lg' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation t, m id orum.',
      'location' => 'Vitoria',
      'email' => 'chloemoe@gmail.com',
    ]);

    Service::factory(9)->create();
  }
}
