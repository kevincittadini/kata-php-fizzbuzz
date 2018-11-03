<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    private $fizzBuzz;

    public function setUp()
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function shouldFizzBuzz()
    {
        $this->assertEquals('1', $this->fizzBuzz->do(1));
        $this->assertEquals('2', $this->fizzBuzz->do(2));
        $this->assertEquals('fizz', $this->fizzBuzz->do(3));
        $this->assertEquals('buzz', $this->fizzBuzz->do(5));
        $this->assertEquals('fizzbuzz', $this->fizzBuzz->do(15));
    }

    /**
     * @test
     */
    public function shouldFizzBuzzMany()
    {
        $this->assertEquals(
            '1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz, 11, fizz, 13, 14, fizzbuzz, fizzbuzz',
            $this->fizzBuzz->doMany([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 30])
        );
    }
}