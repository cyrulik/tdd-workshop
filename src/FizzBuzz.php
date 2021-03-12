<?php

namespace App;

class FizzBuzz
{
    /**
     * @param int $number
     * @return string
     */
    public function process(int $number): string
    {
        $response = '';

        foreach (range(1, $number) as $item) {
            $response .= $this->format($item) . "\n";
        }

        return trim($response);
    }

    /**
     * @param int $number
     * @return string
     */
    public function format(int $number): string
    {
        if ($number % 15 === 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 === 0) {
            return 'Fizz';
        }

        if ($number % 5 === 0) {
            return 'Buzz';
        }

        return $number;
    }
}
