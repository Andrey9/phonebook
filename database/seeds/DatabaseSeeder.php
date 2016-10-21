<?php

use Illuminate\Database\Seeder;
use App\Record;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RecordsSeeder::class);
    }
}

class RecordsSeeder extends Seeder
{
    public function run()
    {
        DB::table('records')->delete();
        for ($i=1;$i<5;$i++)
            Record::create([
                'name' => 'Name '.$i,
                'surname' => 'Surname '.$i,
                'number' => $i.$i.'-'.$i.$i.'-'.$i.$i,
                'year' => '199'.$i.'-0'.$i.'-2'.$i,
            ]);
    }
}
