<?php

interface IPayments
{
    const TYPE_STATE = 1;

    public function getPrice();
}

interface IOrders extends IPayments
{
    public function getOrders(float $id): float;
}

class Payments implements IOrders
{

    function getPrice()
    {
        return self::TYPE_STATE;
    }

    function getOrders(float $id): float
    {
        return $id;
    }
}

$payments = new Payments();
echo $payments->getPrice();
echo $payments->getOrders(25.2);
