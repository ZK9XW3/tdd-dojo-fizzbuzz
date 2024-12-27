<?php

declare(strict_types=1);

namespace App\Manager;

final readonly class FizzBuzzManager
{
    public function execute(): array
    {
        $array = [];
        for ($i = 1; $i <= 100; $i++) {
            $array[] = $this->checkFizzBuzz($i);
        }

        return $array;
    }

    private function checkFizzBuzz(int $value): string
    {
        switch ($value) {
            case $value % 3 === 0 && $value % 5 === 0:
                return 'FizzBuzz';
            case $value % 3 === 0:
                return 'Fizz';
            case $value % 5 === 0:
                return 'Buzz';
            default:
                return (string) $value;
        }
    }

    public function print(): void
    {
        foreach ($this->execute() as $item) {
            echo $item . PHP_EOL;
        }
    }
}