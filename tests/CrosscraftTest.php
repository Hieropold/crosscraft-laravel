<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CrosscraftTest extends TestCase
{
    /**
     * @return void
     */
    public function testLandingPage()
    {
        $this->visit('/')
             ->see('Crosscraft');
    }
}
