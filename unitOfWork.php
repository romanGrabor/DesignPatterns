<?php

/**
 * Шаблон Unit Of Work предназначен для сохранения изменений одной транзакцией, вместо нескольких вызовов метода save().
 * Шаблон баз данных.
 */
class UnitOfWork
{
    private array $new = [];

    public function registerNew(User $user): void
    {
        $this->new[] = $user;
    }

    public function commit(UserDataMapper $mapper): void
    {
        foreach ($this->new as $user) {
            $mapper->insert($user);
        }

        $this->new = [];

        echo 'commit';
    }
}
