<?php
/**
 * Created by PhpStorm.
 * User: Лёня
 * Date: 7/14/2019
 * Time: 6:00 PM
 */

namespace src\Strategy;


class PlusOperation implements OperationInterface
{

    public function calc(int $a, int $b): int
    {
        return $a + $b;
    }
}