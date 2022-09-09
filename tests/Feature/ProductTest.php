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
    public function test_index()
    {
        $products = Product::factory()->count(5)->create();
        $response = $this->get('/', ['products'=>$products]);

        $response->assertStatus(200)
                 ->assertViewIs('home')
                 ->assertViewHas('products');

    }
    public function test_create()
    {
      $response = $this->get('products/create');

      $response->assertStatus(200)
               ->assertViewIs('create')
               ->assertSee('Añadir Evento');
    }
    public function test_store()
    {
      $event = [
        'title' => 'Comic Day',
        'date' => '01/10/2022',
        'time' => '10:00',
        'max_participants' => '20',
        'description' => 'Evento para reunir autores, editores con el publico para interactuar sobre los comic',
        'image' => 'comic.jpg'
      ];
      $response = $this->post('/', $event);
      $products = Product::all();
      $response->assertStatus(302)
              ->assertRedirect(route('products.index'));
      $this->assertEquals('Comic Day', $products[0]->title);
    }
    public function test_delete()
    {
      $products = Product::factory()->create();
      $response = $this->delete(route('products.delete',['id'=>$products->id]));
      $response->assertStatus(302)
      ->assertRedirect(route('products.index'))
      ->assertSessionHas('message', 'Event deleted');
    }

    public function test_edit()
    {
      $products = Product::factory()->create();
      $response = $this->get(route('products.edit',['id'=>$products->id]));
      $response->assertStatus(200)
                ->assertViewIs('edit')
                ->assertSee($products->title);
    }
    // public function test_update()
    // {
    //   $products = Product::factory()->create();
    //   $event = [
    //     'title' => 'Cmic Day',
    //     'date' => '01/10/2022',
    //     'time' => '10:00',
    //     'max_participants' => '20',
    //     'description' => 'Evento para reunir autores, editores con el publico para interactuar sobre los comic',
    //     'image' => 'comic.jpg'];
    //     $response = $this->put(route('products.update',['id'=>$products->id], $event));

    //     $response->assertStatus(302)
    //     ->assertRedirect(route('products.index'));


    // }


}
