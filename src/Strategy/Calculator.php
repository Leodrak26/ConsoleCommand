<?php
/**
 * Created by PhpStorm.
 * User: Лёня
 * Date: 7/14/2019
 * Time: 5:23 PM
 */

namespace src\Strategy;

class Calculator implements OperationInterface
{
    private $strategy;

    public function __construct(string $operation)
    {
        $this ->strategy = $this-> getStrategy($operation);
    }

    private function getStrategy($operation) : OperationInterface
    {
        switch ($operation)
        {
            case '+': return new PlusOperation();
            case '-': return new MinuOperation();
            case '*': return new UmnoOperation();
            case '/': return new DiviOperation();
            default :  throw new \Exception('This operation is not found');
        }
    }

    /**
     * @param int $a переменная
     * @param int $b переменная
     * @return int
     */
    public function calc(int $a, int $b): int
    {
        return $this->strategy->calc($a , $b);
    }

}