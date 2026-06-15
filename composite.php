<?php

/**
 * Шаблон Composite позволяет одинаково работать как с объектом, так и группой объектов.
 * Недостаток шаблона в том, что он зависит от сходства своих частей и не применим когда есть сложные правила того,
 * какие объекты-композиты какие наборы компонентов могут содержать.
 * Шаблон программирования гибких объектов (структурный шаблон).
 */
interface Node
{
    public function render(): string;
}

class TextNode implements Node
{
    public function render(): string
    {
        return 'TEXT';
    }
}

class DivNode implements Node
{
    private array $children = [];

    public function add(Node $node): void
    {
        $this->children[] = $node;
    }

    public function render(): string
    {
        $result = '';

        foreach ($this->children as $child) {
            $result .= $child->render();
        }

        return "<div>$result</div>";
    }
}
