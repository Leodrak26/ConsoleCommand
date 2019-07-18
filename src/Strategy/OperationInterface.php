<?php
/**
 * Created by PhpStorm.
 * User: Лёня
 * Date: 7/14/2019
 * Time: 5:55 PM
 */

namespace src\Strategy;


interface OperationInterface
{
    public function calc(int $a, int $b) : int;
}