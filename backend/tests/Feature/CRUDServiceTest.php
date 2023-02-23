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

    
    public function test_aServiceCanBeShowed(){
        $this->withExceptionHandling();
        $service=Service::factory()->create();
        $this->assertCount(1,Service::all());
        $response=$this->get(route('showService', $service->id));
        $response->assertSee($service->name);
        $response->assertStatus(200)->assertViewIs('showService');
    }

}