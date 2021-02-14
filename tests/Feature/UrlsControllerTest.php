<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class UrlsControllerTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->get(route('urls.create'));
        $response->assertOk();
    }

    public function testStore()
    {
        $data = ['url' =>
            ['name' => "http://www.test.net"]
        ];

        $response = $this->post(route("urls.store"), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $assertData = ["name" => "www.test.net"];
        $this->assertDatabaseHas('urls', $assertData);
    }


    public function testShow()
    {
        $expectedId = DB::table('urls')->insertGetId([
            'name' => "www.test.net"
        ]);

        $response = $this->get("/urls/{$expectedId}");

        $response->assertStatus(200);
    }


    public function testIndex()
    {
        $response = $this->get('/urls');

        $response->assertStatus(200);
    }

}
