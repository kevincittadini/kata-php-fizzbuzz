<?php

namespace FizzBuzz;

class FizzBuzz
{

    /**
     * @param array $numbers
     *
     * @return string
     */
    public function doMany(array $numbers): string
    {
        $result = [];

        foreach ($numbers as $number) {
            $result[] = $this->do($number);
        }

        return implode(', ', $result);
    }

    /**
     * @param int $number
     *
     * @return string
     */
    public function do(int $number): string
    {
        if ($number % 15 === 0) return 'fizzbuzz';
        if ($number % 5 === 0)  return 'buzz';
        if ($number % 3 === 0)  return 'fizz';

        return $number;
    }
}