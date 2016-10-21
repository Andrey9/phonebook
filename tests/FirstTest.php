<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FirstTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_root_route()
    {
        $this->visit('/')->seePageIs('/record');

    }
    public function test_new_record_link()
    {
        $this->visit('/')->click('addLink')->seePageIs('record/create');
    }
}
