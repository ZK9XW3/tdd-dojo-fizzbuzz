<?php

namespace App\Tests;

use App\Manager\FizzBuzzManager;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzzManager $manager;

    protected function setUp(): void
    {
        $this->manager = new FizzBuzzManager();
    }

    public function testReturnsAnArray(): void
    {
        $result = $this->manager->execute();
        $this->assertIsArray($result);
    }

    public function testIteratesFrom1To100(): void
    {
        $result = $this->manager->execute();
        $this->assertArrayHasKey('1', $result);
        $this->assertArrayHasKey('99', $result);
    }

    public function testFizz(): void
    {
        $result = $this->manager->execute();
        $this->assertEquals('Fizz', $result[2]);
        $this->assertEquals('Fizz', $result[5]);
        $this->assertEquals('Fizz', $result[8]);
    }

    public function testBuzz(): void
    {
        $result = $this->manager->execute();
        $this->assertEquals('Buzz', $result[4]);
        $this->assertEquals('Buzz', $result[9]);
        $this->assertEquals('Buzz', $result[19]);
    }

    public function testFizzBuzz(): void
    {
        $result = $this->manager->execute();
        $this->assertEquals('FizzBuzz', $result[14]);
        $this->assertEquals('FizzBuzz', $result[29]);
        $this->assertEquals('FizzBuzz', $result[44]);
    }
}
