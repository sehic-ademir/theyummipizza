<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzaListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pizzas')->delete();

        \DB::table('pizzas')->insert(array (
            0 => 
          array (
            'name' => 'Margherita',
            'ingredients' => 'tomato, cheese, basil',
            'price' => '10,00',
            'active' => true,
            'photo' => 'margherita.png',
            'category' => 'pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          1 => 
          array (
            'name' => 'Capricciosa',
            'ingredients' => 'tomato, cheese, ham, champignons, olive',
            'price' => '14,00',
            'active' => true,
            'photo' => 'capricciosa.png',
            'category' => 'pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          2 => 
          array (
            'name' => 'Vegetariana',
            'ingredients' => 'tomato, cheese, vegetables',
            'price' => '10,00',
            'active' => true,
            'photo' => 'vegetariana.png',
            'category' => 'pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          3 => 
          array (
            'name' => 'Hawaii',
            'ingredients' => 'tomato, cheese, ham, champignons, pineapple',
            'price' => '14,00',
            'active' => true,
            'photo' => 'hawaii.png',
            'category' => 'pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          4 => 
          array (
            'name' => 'Funghi',
            'ingredients' => 'tomato, cheese, champignons',
            'price' => '12,00',
            'active' => true,
            'photo' => 'funghi.png',
            'category' => 'pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          5 => 
          array (
            'name' => 'Marinara',
            'ingredients' => 'tomato, garlic, oregano, oil',
            'price' => '12,00',
            'active' => true,
            'photo' => 'marinara.png',
            'category' => 'pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          6 => 
          array (
            'name' => 'Prosciutto crudo',
            'ingredients' => 'tomato, cheese, dry ham',
            'price' => '12,00',
            'active' => true,
            'photo' => 'prosciutto_crudo.png',
            'category' => 'pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          7 => 
          array (
            'name' => 'Calzone',
            'ingredients' => 'tomato, cheese, ham',
            'price' => '12,00',
            'active' => true,
            'photo' => 'calzone.png',
            'category' => 'pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          8 => 
          array (
            'name' => 'Spaghetti Bolognese',
            'ingredients' => 'capellini pasta, ground beef, onions, green pepper, diced tomato, tomato sauce, oregano, dried basil, black pepper',
            'price' => '6,00',
            'active' => true,
            'photo' => 'spaghetti_ground_beef.png',
            'category' => 'pasta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          9 => 
          array (
            'name' => 'Spaghetti Marinara',
            'ingredients' => 'capellini pasta, onions, garlic, diced tomato, tomato sauce, dried oregano',
            'price' => '7,00',
            'active' => true,
            'photo' => 'spaghetti_marinara.png',
            'category' => 'pasta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          10 => 
          array (
            'name' => 'Chicken Feta Pasta',
            'ingredients' => 'extra-virgin olive oil, boneless skinless chicken breasts, freshly ground black pepper, diced tomatoes with basil, garlic, and oregano, gomiti pasta, reduced-fat feta cheese, finely chopped fresh basil',
            'price' => '6,00',
            'active' => true,
            'photo' => 'chicken_feta_pasta.png',
            'category' => 'pasta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
          11 => 
          array (
            'name' => 'Tagliatelle Marinara',
            'ingredients' => 'tagliatelle pasta, onions, garlic, diced tomato, tomato sauce, dried oregano',
            'price' => '5,00',
            'active' => true,
            'photo' => 'spaghetti_tagliatelle.png',
            'category' => 'pasta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),

          12 => 
          array (
            'name' => 'Farfalle pasta',
            'ingredients' => 'farfalle pasta, tomato, garlic, lettuce, extra-virgin olive oil',
            'price' => '5,00',
            'active' => true,
            'photo' => 'spaghetti_farfalle.png',
            'category' => 'pasta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ),
        ));

    }}
