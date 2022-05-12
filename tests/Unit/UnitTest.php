<?php

namespace Tests\Unit;

use Tests\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('/search?category=city&src=api&id=1')->assertStatus(200);
    }
}
