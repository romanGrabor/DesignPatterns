<?php
/**
 * Шаблон Command предназначен для инкапсулирования запроса в объекте. Классы Command вызываются уровнем представления
 * и не должны содержать тяжелую логику.
 * Шаблон выполнения задач и представления результатов (поведенческий).
 */
interface Command
{
    public function execute(): void;
}

class SaveUserCommand implements Command
{
    public function execute(): void
    {
        echo 'User saved';
    }
}
