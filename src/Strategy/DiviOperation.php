<?php
/**
 * Created by PhpStorm.
 * User: Лёня
 * Date: 7/14/2019
 * Time: 6:00 PM
 */

namespace src\Strategy;


class DiviOperation implements OperationInterface
{

    public function calc(int $a, int $b): int
    {
        if (!$b) {
            return 'Нельзя';
        }else
            {
        return $a / $b;
        }
    }
}