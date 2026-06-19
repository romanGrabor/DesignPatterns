<?php

/**
 * Шаблон Factory Method скрывает создание объекта, когда клиентский код не должен знать конкретный класс.
 *
 * Клиентский код ожидает получения объекта типа Transport и не обязательно должен знать о конкретной реализации.
 * Например, не важно какой автомобиль: Lada или BMW.
 * Шаблон генерации объектов.
 */
interface Transport
{
    public function move(): string;
}

class Car implements Transport
{
    public function move(): string
    {
        return 'Едем на машине Lada Granta';
    }
}

abstract class TransportFactory
{
    abstract public function create(): Transport;
}

class CarFactory extends TransportFactory
{
    public function create(): Transport
    {
        return new Car();
    }
}
