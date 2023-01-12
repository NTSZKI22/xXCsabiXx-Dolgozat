<?php

namespace Tests\Feature;

use App\Models\Merchant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MerchantTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Create()
    {
        $this->seed();

        $response = $this->postJson('/api/merchants/create', [
            'name' => "Rizma Krisztofer",
            'address' => "Vörösmarty út Mihály 6",
            'phone' => "36706013327",
            'active' => "0",
        ]);

        $response->assertStatus(201);
    }

    public function test_Delete()
    {
        $this->seed();

        $ped = new Merchant();
        $ped->name = "DEL TESZT";
        $ped->address = "DEL TESZT";
        $ped->phone = "DEL TESZT";
        $ped->active = "1";
        $ped->save();

        $response = $this->delete('/api/merchants/delete/' . $ped['id']);

        $response->assertStatus(204);
    }

    public function test_get()
    {
        $this->seed();

        $response = $this->get('/api/merchants/get');
        $response->assertStatus(200);
    }

    public function test_update()
    {
        $this->seed();

        $ped = new Merchant();
        $ped->name = "DEL TESZT";
        $ped->address = "DEL TESZT";
        $ped->phone = "DEL TESZT";
        $ped->active = "0";
        $ped->save();

        $response = $this->putJson('/api/merchants/update/' . $ped['id'], [
            'name' => "updat jó volt",
            'address' => "Vörösmarty út Mihály 6",
            'phone' => "36706013327",
            'active' => "0",
        ]);

        $response->assertStatus(200);
        $ped->delete();
    }
}