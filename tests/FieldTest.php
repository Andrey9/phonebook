<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FieldTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_field()
    {
        $this->visit('/record/create')
            ->type('Ivan', 'name')
            ->type('Budko', 'surname')
            ->type('228228', 'number')
            ->type('1997-09-13', 'year')
            ->press('save')
            ->visit('/record')
            ->see('Ivan')
            ->see('Budko')
            ->see('228228')
            ->see('13.09.1997');
    }
}
