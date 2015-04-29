<?php
 
use Illuminate\Database\Seeder;
 
class VotantsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('votants')->delete();
 
        $votants = array(
            ['id' => 1, 'poblacion_id' => '1', 'dni' => '36221085A', 'nom' => 'Augusto Aurelio', 'slug' => 'augusto-aurelio', 'dataNaixement' => '1976-04-20', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'poblacion_id' => '1', 'dni' => '47838254R', 'nom' => 'Poncio Pilatos', 'slug' => 'poncio-pilatos', 'dataNaixement' => '1974-06-23', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'poblacion_id' => '1', 'dni' => '38746592H', 'nom' => 'Dulcinea Laurealis', 'slug' => 'dulcinea-laurealis', 'dataNaixement' => '1966-02-18', 'created_at' => new DateTime, 'updated_at' => new DateTime],
	    ['id' => 4, 'poblacion_id' => '1', 'dni' => '35647586S', 'nom' => 'Bar Cino', 'slug' => 'bar-cino', 'dataNaixement' => '1996-04-08', 'created_at' => new DateTime, 'updated_at' => new DateTime],
	    ['id' => 5, 'poblacion_id' => '2', 'dni' => '47635465O', 'nom' => 'Albert Vil·la', 'slug' => 'albert-vil-la', 'dataNaixement' => '1963-12-18', 'created_at' => new DateTime, 'updated_at' => new DateTime],
	    ['id' => 6, 'poblacion_id' => '2', 'dni' => '38948574F', 'nom' => 'Diego Armando', 'slug' => 'diego-armando', 'dataNaixement' => '1946-06-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
	    ['id' => 7, 'poblacion_id' => '1', 'dni' => '32758583X', 'nom' => 'Dieguito el Malo', 'slug' => 'dieguito-el-malo', 'dataNaixement' => '1996-08-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
	    ['id' => 8, 'poblacion_id' => '1', 'dni' => '33777407C', 'nom' => 'Daniel el Travieso', 'slug' => 'daniel-el-travieso', 'dataNaixement' => '1986-04-11', 'created_at' => new DateTime, 'updated_at' => new DateTime],
	    ['id' => 9, 'poblacion_id' => '2', 'dni' => '28367428I', 'nom' => 'El Dioni', 'slug' => 'el-dioni', 'dataNaixement' => '1929-03-02', 'created_at' => new DateTime, 'updated_at' => new DateTime],
	    ['id' => 10, 'poblacion_id' => '2', 'dni' => '96843725Y', 'nom' => 'Lara Croft', 'slug' => 'lara-croft', 'dataNaixement' => '1946-06-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('votants')->insert($votants);
    }
 
}
