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
	public function canGetAllServices()
	{
		// Create Property so that the response returns it.
		$service = Service::factory()->create();
		
		$response = $this->getJson(route('servicesApi'));
		// We will only assert that the response returns a 200 status for now.
		$response->assertOk(); 

        // Add the assertion that will prove that we receive what we need 
		// from the response.
	
	}
}
