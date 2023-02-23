<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class test_CrudUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_ClientCanSeeLoginWhenVisitUrl()
    {
        $response = $this->get('/login'); // send a GET request to the /login URL
        
        $response->assertStatus(200); // assert that the response status code is 200 (OK)
        $response->assertSee('Login'); // assert that the response body contains the text "Login"
    }
    

    
    public function test_anAuthClientCanLoginAndSeeTheListServices()
    {
        $user = User::factory()->create(); // create a new user
        $credentials = ['email' => $user->email, 'password' => 'password']; // set the user's login credentials
    
        $response = $this->post('/login', $credentials); // send a POST request to the /login URL with the user's credentials
        $response->assertRedirect('/home'); // assert that the response redirects to the /home URL
    
        $response = $this->actingAs($user)->get('/services'); // send a GET request to the /services URL as an authenticated user
        $response->assertStatus(200); // assert that the response status code is 200 (OK)
        $response->assertSee('Services'); // assert that the response body contains the text "Services"
     
    }
    
    public function test_aServiceCanBeDeletedCanBeDeletedByAdminAndCanNotDeletedIfNoAdmin(){
        $this->withExceptionHandling();

        $service = Service::factory()->create();
        $this->assertCount(1, Service::all());

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);
        $response = $this->delete(route('deleteService', $service->id));
        $this->assertCount(1, Service::all());

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);
        $response = $this->delete(route('deleteService', $service->id));
        $this->assertCount(0, Service::all());
    }

    public function test_aServiceCanBeCreated(){
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);

        $response = $this->post(route('store'),
        [
            'serviceImg'=> 'serviceImg',
            'name'=> 'name',
            'title'=> 'title',
            'descriptionSm'=> 'descriptionSm',
            'descriptionLm'=> 'descriptionLm',
            'location'=> 'location',
            'email'=> 'email',

        ]);

        $this->assertCount(1, Service::all());

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);

        $response = $this->post(route('storeService'),
        [
            'name'=> 'name',
         
        ]);

        $this->assertCount(1, Service::all());
    }

    public function test_aServiceCanBeUpdated(){
        $this->withExceptionHandling();

        $service = Service::factory()->create();
        $this->assertCount(1, Service::all());

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);
        $response = $this->patch(route('updateService', $service->id), ['name' => 'New Name']);
        $this->assertEquals('New Name', Service::first()->name);

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);
        $response = $this->patch(route('updateService', $service->id), ['name' => 'New Name if no Admin']);
        $this->assertEquals('New Name', Service::first()->name);
    }

    public function test_aServiceCanBeShowed(){
        $this->withExceptionHandling();

        $services = Service::factory(2)->create();
        $service = $services[0];

        $response = $this->get(route('showService', $service->id));

        $response->assertSee($service->name);

        $response->assertStatus(200)
                ->assertViewIs('showService');
    }




}

