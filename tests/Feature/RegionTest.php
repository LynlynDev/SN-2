<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \App\RegionModel;
// use Tests\Feature\RegionTest;

class RegionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $regionModel = new RegionModel();
        $regionModel = [
            "label"=> "Lynder"
        ];
        $response = $this->get('api/regionModel');

        $response->assertStatus(200);
        $response = $this-> withHeaders(['X-Header' => 'value'])->POST("api/regionModel", $regionModel); 
        $response -> assertStatus(201);   

    }

    public function update(): void
    {

        $regionModel = new RegionModel();
        $regionModel = [
            "label"=> "Lynder"
        ];
        $response = $this->put('api/regionModel');

        $response->assertStatus(200);
        $response = $this-> withHeaders(['X-Header' => 'value'])->PUT("api/regionModel", $regionModel); 
        $response -> assertStatus(201);   

    }
}
