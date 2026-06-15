<?php

/**
 * Шаблон Interpreter. Интерпретация языка или выражений. "Клиент" строит предложение в виде абстрактного
 * синтаксического дерева, в узлах которого находятся объекты классов "ТерминальноеВыражение" (неделимый конечный
 * элемент) и "НетерминальноеВыражение" (составной узел), затем "Клиент" инициализирует контекст и вызывает операцию
 * Разобрать(Контекст).
 * Шаблон выполнения задач и представления результатов (поведенческий).
 */
interface Expression
{
    public function interpret(): int;
}

class Number implements Expression
{
    public function __construct(
        private int $value
    ) {
    }

    public function interpret(): int
    {
        return $this->value;
    }
}

class Add implements Expression
{
    public function __construct(
        private Expression $left,
        private Expression $right
    ) {
    }

    public function interpret(): int
    {
        return $this->left->interpret()
            + $this->right->interpret();
    }
}
