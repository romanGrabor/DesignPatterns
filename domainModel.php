<?php

/**
 * Шаблон Domain Model предполагает размещение бизнес-логики внутри объекта.
 * Шаблон корпоративных приложений (Enterprise Patterns).
 */
class Order
{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function applyDiscount(float $percent): void
    {
        $this->amount -= $this->amount * $percent / 100;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
