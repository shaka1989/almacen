<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


//Classes
use Faker\Factory as Faker;
use App\User;
use App\Product;
use App\Category;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('categoriesTableSeeder');
		$this->call('productsTableSeeder');
	}

}


class UserTableSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		User::create(['name' => 'admin','email' => 'admin@almacen.com', 'password' => bcrypt('123456') ]);
	}

}


class categoriesTableSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		Category::create(['name' => 'Computadores']);
		Category::create(['name' => 'Electrodomésticos']);
		Category::create(['name' => 'Deportes']);
		Category::create(['name' => 'Calzado']);
		Category::create(['name' => 'Deportes']);
	}

}


class productsTableSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$fake = Faker::create();

		for ($i=0; $i < 30 ; $i++) { 

			Product::create(['name' => $fake->company(), 'image' => $fake->imageUrl(640,480), 'quanty' => $fake->biasedNumberBetween(1,1000), 'value' => $fake->biasedNumberBetween(100,500000), 'sales' => $fake->biasedNumberBetween(1,100), 'category_id' => $fake->biasedNumberBetween(1,5)  ]);
		}
		
		
	}

}
