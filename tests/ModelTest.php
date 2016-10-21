<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Record;
class ModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_record_model()
    {
        $record= Record::create([
            'name'=>'Ivan',
            'surname'=>'Budko',
            'number'=>'228228',
            'year'=> '1997-09-13'
        ]);
        $found_record=Record::find(1);
        $this->assertEquals($found_record->name,'Ivan');
        $this->assertEquals($found_record->surname,'Budko');
        $this->assertEquals($found_record->number,'228228');
        $this->assertEquals($found_record->year,\Carbon\Carbon::createFromFormat('Y-m-d H:i:s','1997-09-13 00:00:00'));
    }
}
