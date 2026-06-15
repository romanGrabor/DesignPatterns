<?php

/**
 * Шаблон Identity Map предназначен для снижения нагрузки на БД. Если User #1 уже был прочитан из БД, то возвращаем тот
 * же объект из памяти.
 */
class IdentityMap
{
    private array $items = [];

    public function add(User $user): void
    {
        $this->items[$user->id] = $user;
    }

    public function get(string $id): ?User
    {
        return $this->items[$id] ?? null;
    }
}
