<?php
 
use Illuminate\Database\Seeder;
 
class PoblacionsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('poblacions')->delete();
 
        $poblacions = array(
            ['id' => 1, 'nom' => 'Barcelona', 'slug' => 'barcelona', 'habitants' => '800000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nom' => 'Girona', 'slug' => 'girona', 'habitants' => '300000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('poblacions')->insert($poblacions);
    }
 
}
