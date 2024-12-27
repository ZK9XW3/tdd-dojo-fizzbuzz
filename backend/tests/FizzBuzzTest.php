<?php

namespace App\Tests;

use App\Manager\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $manager;

    protected function setUp(): void
    {
        $this->manager = new FizzBuzz();
    }

    public function testReturnsANumber(): void
    {
        $result = $this->manager->execute();
        $this->assertIsString($result);
    }

}
