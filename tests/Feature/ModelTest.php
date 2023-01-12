<?php

namespace Tests\Feature;

use App\Models\CarModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ModelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Create()
    {
        $this->seed();

        $response = $this->postJson('/api/models/create', [
            'brand_id' => "1",
            'name' => "ignis"
        ]);

        $response->assertStatus(201);
    }

    public function test_Delete()
    {
        $this->seed();

        $model = new CarModel();
        $model->brand_id = "1";
        $model->name = "DEL TESZT";
        $model->save();

        $response = $this->delete('/api/models/delete/' . $model['id']);

        $response->assertStatus(204);
    }

    public function test_get()
    {
        $this->seed();

        $response = $this->get('/api/models/get');
        $response->assertStatus(200);
    }

    public function test_update()
    {
        $this->seed();

        $model = new CarModel();
        $model->brand_id = "1";
        $model->name = "DEL TESZT";
        $model->save();

        $response = $this->putJson('/api/models/update/' . $model['id'], [
            'brand_id' => "1",
            'name' => "ignis"
        ]);

        $response->assertStatus(200);
        $model->delete();
    }
}