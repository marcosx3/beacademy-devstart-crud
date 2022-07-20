<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{

    public function test_new_products_can_register()
    {
            $prod = Product::factory()->create();
            $response = $this->post('/produtos/cadastro',[
                "name" => $prod->name,
                "gender" =>$prod->gender,
                "developer" => $prod->developer,
                "distributor" => $prod->distributor,
                "launch" => $prod->launch,
                "so" => $prod->so,
                "processor" => $prod->processor,
                "memory_ram" => $prod->memory_ram,
                "storage_req" => $prod->storage_req,
                "video_card" => $prod->video_card,
            ]);
            $response = $this->get('/produtos/lista');
            $response->assertStatus(200);

    } 

    


}
