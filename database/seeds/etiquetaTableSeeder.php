<?php

use Illuminate\Database\Seeder;

class etiquetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $data = [];

        for($i=0; $i<20; $i++)
			array_push($data, [
							   'tag' => $faker->sentence(4,false), 
							  ]) ;

        // Insertamos los datos en la base de datos
        DB::table('etiqueta')->insert($data) ;
    }
}
