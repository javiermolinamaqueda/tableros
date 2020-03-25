<?php

use Illuminate\Database\Seeder;

class NotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create() ;

    	// Creamos la colección de datos
        $data = [] ;

        //
        for($i=0; $i<30; $i++)
			array_push($data, [
							   'idTab'		=> $faker->numberBetween(1,10),
							   'texto' 		=> $faker->text(),
							   'fecha'  	=> $faker->date('Y-m-d'),
							   'completado' => $faker->boolean,
							  ]) ;

        // Insertamos los datos en la base de datos
        DB::table('nota')->insert($data) ;
    }
}
