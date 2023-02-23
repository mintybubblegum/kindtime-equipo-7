<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Service;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class apiCRUDServicesTest extends TestCase
{
    use RefreshDatabase;
	
	public function test_canGetAllServicesFromDb()
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


    public function test_canGetAServiceById()
    {
        $service = Service::factory()->create();

        $response = $this->get('/api/services/'.$service->id);

        $response->assertOk()
                ->assertJsonFragment(['name' => $service->name]);
    }

    public function test_canUpdateAService()
    {
        $service = Service::factory()->create();
        $data = ['name' => 'Updated Service'];

        $response = $this->put('/api/services/'.$service->id, $data);

        $response->assertOk()
                ->assertJsonFragment(['name' => 'Updated Service']);

        $this->assertDatabaseHas('services', $data);
    }

    public function test_canDeleteAService()
    {
        $service = Service::factory()->create();

        $response = $this->deleteJson('/api/services/'.$service->id);

        $response->assertStatus(204);

        $this->assertDatabaseMissing('services', $service->toArray());

	}
}
