<?php

namespace Tests\Unit;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function itFormatsIntegersAsStrings()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertSame('1', $fizzBuzz->format(1));
        $this->assertSame('7', $fizzBuzz->format(7));
        $this->assertSame('22', $fizzBuzz->format(22));
    }

    /**
     * @test
     */
    public function itReturnsMultiplesOf3AsFizz()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertSame('Fizz', $fizzBuzz->format(3));
    }

    /**
     * @test
     */
    public function itReturnsMultiplesOf5AsBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertSame('Buzz', $fizzBuzz->format(5));
    }

    /**
     * @test
     */
    public function itReturnsMultiplesOf15AsFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertSame('FizzBuzz', $fizzBuzz->format(15));
    }

    /**
     * @test
     */
    public function itCanProcessARangeOfNumbers()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertSame('1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz', $fizzBuzz->process(15));
    }
}
