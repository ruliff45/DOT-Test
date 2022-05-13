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
        $i = random_int(1, 501);
        $this->get('/search?category=city&src=api&id=' . $i)->assertStatus(200);
        $this->get('/search?category=city&src=db&id=' . $i)->assertStatus(200);

        $num = random_int(1, 34);
        $this->get('/search?category=province&src=api&id=' . $num)->assertStatus(200);
        $this->get('/search?category=province&src=db&id=' . $num)->assertStatus(200);
    }
}
