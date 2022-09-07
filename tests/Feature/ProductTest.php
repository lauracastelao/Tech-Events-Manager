<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_products_Index()
    {

        $products = Product::factory()->count(3)->create();

        $response = $this->get('/Products', ['products'=>$products]);

        $response->assertStatus(200)

        ->assertViewIs('home')
        ->assertViewIs('products');

    }
}
