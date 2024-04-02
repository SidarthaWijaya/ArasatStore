<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Faker\Factory as FakerFactory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            'category_id'=> $this->faker->numberBetween(1,3),
            'nama_barang' => $this->faker->name,
            'qty_stock' =>$this->faker->numberBetween(1,10),
            'price'=> $this->faker->numberBetween(5000,50000 ),
            'berat_barang'=> $this->faker->numberBetween(1,4),
            'description'=> $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'product_url'=>$this->faker->name
        ];
    }
}
