<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class SmsTest extends TestCase
{
    /**
     * A basic unit feature test example.
     */
    
    

    public function test_for_status_200(): void
    {
       $url = config('app.url');

       $response = $this->withHeaders(['Accept' => 'application/json'])->post($url.'/api/patient-sms', ['id' => 1,'sms' =>'Welcome to our practice']);
        
       $response->assertStatus(200);
    }

    public function test_for_status_422(): void
    {
       
       //Sms length must be at least 10 charachters!
       $url = config('app.url');
       
       $response = $this->withHeaders(['Accept' => 'application/json'])->post($url.'/api/patient-sms', ['id' => 1,'sms' =>'Welcome']);
        
       $response->assertStatus(422);
    }
}
