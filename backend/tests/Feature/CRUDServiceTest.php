<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Service;
use App\Models\User;
use function PHPUnit\Framework\assertCount;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_listServiceAppearInHomeView() {
        $this->withExceptionHandling();
        $services = Service::factory(9)->create();
        $service = $services[0];
        $response = $this->get('/');
        $response->assertSee($service->title);
        $response->assertStatus(200)->assertViewIs('home');
    }

    /* public function test_aTripCanBeDeletedByAdmin() {
        $this->withExceptionHandling();

        $trip = Trip::factory()->create();
        $this->assertCount(1, Trip::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->delete(route('deleteTrip', $trip->id));
        $this->assertCount(1, Trip::all());

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->delete(route('deleteTrip', $trip->id));
        $this->assertCount(0, Trip::all());
    } */

    /* public function test_aTripCanBeCreatedByAdmin(){
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->post(route ('storeTrip'),
        [
            'imgDestination' => 'imgDestination',
            'originAddress' => 'originAddress',
            'originPostcode' => 'originPostcode',
            'originCity' => 'originCity',
        ]);

        $this->assertCount(1,Trip::all()); 

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->post(route ('storeTrip'),
        [
            'imgDestination' => 'imgDestination',
            'originAddress' => 'originAddress',
            'originPostcode' => 'originPostcode',
            'originCity' => 'originCity',
        ]);

        $this->assertCount(1,Trip::all()); 
    } */

    /* public function test_aTripCanBeUpdatedByAdmin(){
        $this->withExceptionHandling();
        $trip=Trip::factory()->create();
        $this->assertCount(1,Trip::all());

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response=$this->patch(route('updateTrip',$trip->id), ['destinationCity'=>'New DestinationCity']);
        $this->assertEquals('New DestinationCity', Trip::first()->destinationCity);

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response=$this->patch(route('updateTrip',$trip->id), ['destinationCity'=>'New DestinationCity if not Admin']);
        $this->assertEquals('New DestinationCity', Trip::first()->destinationCity);
    } */

    public function test_aServiceCanBeShowed(){
        $this->withExceptionHandling();
        $service=Service::factory()->create();
        $this->assertCount(1,Service::all());
        $response=$this->get(route('showService', $service->id));
        $response->assertSee($service->name);
        $response->assertStatus(200)->assertViewIs('showService');
    }

}