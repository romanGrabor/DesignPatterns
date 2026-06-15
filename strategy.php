<?php

/**
 * Шаблон Strategy позволяет менять стратегию во время выполнения и без условных операторов.
 * Шаблон выполнения задач и представления результатов (поведенческий).
 */
interface SortStrategy
{
    public function sort(array $items): array;
}

class AscStrategy implements SortStrategy
{
    public function sort(array $items): array
    {
        sort($items);
        return $items;
    }
}

class DescStrategy implements SortStrategy
{
    public function sort(array $items): array
    {
        rsort($items);
        return $items;
    }
}

class Sorter
{
    public function __construct(
        private SortStrategy $strategy
    ) {
    }

    public function sort(array $items): array
    {
        return $this->strategy->sort($items);
    }
}
