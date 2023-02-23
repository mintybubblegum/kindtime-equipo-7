<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Service;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class apiCRUDServicesTest extends TestCase
{
    use RefreshDatabase;
	
	public function test_canGetAllServices()
	{

		$service = Service::factory()->create();
		
		$response = $this->getJson(route('servicesApi'));

		$response->assertOk(); 

  
		$response->assertJson([
			'services' => [
				[
					'serviceImg'=> $service->serviceImg,
					'name' => $service->name,
					'title' => $service->title,
					'descriptionSm' => $service->descriptionSm,
					'descriptionLg' => $service->descriptionLg,
					'location' => $service->location,
					'email' => $service->email
				
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
