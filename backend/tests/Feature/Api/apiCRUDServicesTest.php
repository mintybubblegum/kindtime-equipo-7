<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Service;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class apiCRUDServicesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
	
	/** @test */
	public function test_canGetAllServices()
	{
		// Create Property so that the response returns it.
		$service = Service::factory()->create();
		
		$response = $this->getJson(route('servicesApi'));
		// We will only assert that the response returns a 200 status for now.
		$response->assertOk(); 

  
		$response->assertJson([
			'data' => [
				[
					'serviceImg'=> $service->serviceImg,
					'name' => $service->name,
					'title' => $service->title, 
					'descriptionSm'=> $service->descriptionSm,
					'descriptionLg'=> $service->descriptionLg,
					'location'=> $service->location,
					'email'=> $service->email,
					'price' => $service->price,  
				
				]
			]
		]);
	
	}



    public function test_listServiceAppearInJson() {
        $this->withExceptionHandling();
        $services = Service::factory(9)->create();
        $service = $services[0];
        $response = $this->getJson(route('servicesApi'));
        $response->assertJsonFragment(['title' => $service->title]);
        $response->assertStatus(200);
    }
}
