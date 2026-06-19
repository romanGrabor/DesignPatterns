<?php

/**
 * Шаблон Prototype предназначен для создания объекта через копирование. Полезен при работе с тяжелыми объектами.
 * Если свойства исходного объекта содержат ссылки на другие объекты, то их значения не клонируются, а будут содержать
 * ссылки на эти же объекты. Для исключения данной ситуации в объекте необходимо реализовать метод __clone, где данные
 * свойства принудительно клонируются.
 * Шаблон генерации объектов.
 */
class UserPrototype
{
    public string $name;
    public User $user;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->user = new User('1', 'Алиса');
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function __clone(): void
    {
        $this->user = clone $this->user;
    }
}
