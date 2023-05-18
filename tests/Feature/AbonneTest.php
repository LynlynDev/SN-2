<?php

namespace Tests\Feature;

use App\Models\abonne;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AbonneTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        
        $abonneModel = new abonne();
        $abonneModel = [
            'nom' => 'Njeuha',
            'prenom'=> 'Aurèle', 
            'age'=> '20', 
            'sexe'=> 'M', 
            'profession'=> 'Medecin', 
            'rue'=> '13ème Avenue', 
            'codePostal'=> 'BP: 134', 
            'ville'=> 'Lyon', 
            'pays'=> 'France', 
            'tel'=> +337052346, 
            'email'=>'aureldorian@gmail.com'
        ];
        $response = $this->get('api/abonne');

        $response->assertStatus(200);
        $response = $this-> withHeaders(['X-Header' => 'value'])->POST("api/abonne", $abonneModel); 
        // $response -> assertStatus(201); 
    }
}
