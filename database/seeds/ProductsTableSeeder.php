<?php

use Illuminate\Database\Seeder;
use App\Admin\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name' => 'Macbook Pro',
        	'slug' => 'Macbook',
        	'details' => '15 inch, 8GB Ram, 1TB SSD',
        	'price' => 10000000,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur. Inventore, sapiente dolor eaque, praesentium deserunt incidunt doloremque, fuga sit ad quis tenetur id omnis nisi eos aliquam eligendi minima.',
        ]);

        Product::create([
        	'name' => 'Asus ROG Strix',
        	'slug' => 'Asus',
        	'details' => '15 inch, 16GB Ram, 1TB SSD',
        	'price' => 15000000,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur. Inventore, sapiente dolor eaque, praesentium deserunt incidunt doloremque, fuga sit ad quis tenetur id omnis nisi eos aliquam eligendi minima.',
        ]);

        Product::create([
        	'name' => 'Keyboard Razer Black Widow Series',
        	'slug' => 'Razer',
        	'details' => 'Backlight',
        	'price' => 750000,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur. Inventore, sapiente dolor eaque, praesentium deserunt incidunt doloremque, fuga sit ad quis tenetur id omnis nisi eos aliquam eligendi minima.',
        ]);

        Product::create([
        	'name' => 'Headphone Razer',
        	'slug' => 'Razer-2',
        	'details' => 'Green edition',
        	'price' => 750000,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur. Inventore, sapiente dolor eaque, praesentium deserunt incidunt doloremque, fuga sit ad quis tenetur id omnis nisi eos aliquam eligendi minima.',
        ]);

        Product::create([
        	'name' => 'Macbook Pro-2',
        	'slug' => 'Macbook-2',
        	'details' => '15 inch, 8GB Ram, 1TB SSD',
        	'price' => 10000000,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur. Inventore, sapiente dolor eaque, praesentium deserunt incidunt doloremque, fuga sit ad quis tenetur id omnis nisi eos aliquam eligendi minima.',
        ]);

        Product::create([
        	'name' => 'Asus ROG Strix-2',
        	'slug' => 'Asus-2',
        	'details' => '15 inch, 16GB Ram, 1TB SSD',
        	'price' => 15000000,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur. Inventore, sapiente dolor eaque, praesentium deserunt incidunt doloremque, fuga sit ad quis tenetur id omnis nisi eos aliquam eligendi minima.',
        ]);

        Product::create([
        	'name' => 'Keyboard Razer Black Widow Series-2',
        	'slug' => 'Razer-3',
        	'details' => 'Backlight',
        	'price' => 750000,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur. Inventore, sapiente dolor eaque, praesentium deserunt incidunt doloremque, fuga sit ad quis tenetur id omnis nisi eos aliquam eligendi minima.',
        ]);

        Product::create([
        	'name' => 'Headphone Razer-2',
        	'slug' => 'Razer-4',
        	'details' => 'Green edition',
        	'price' => 750000,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur. Inventore, sapiente dolor eaque, praesentium deserunt incidunt doloremque, fuga sit ad quis tenetur id omnis nisi eos aliquam eligendi minima.',
        ]);
    }
}
