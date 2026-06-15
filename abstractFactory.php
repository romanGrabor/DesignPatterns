<?php

/**
 * Шаблон Abstract Factory cоздает набор связанных объектов, в отличие от Factory Method, который создает один объект.
 * Шаблон генерации объектов.
 */
interface Button
{
    public function render(): string;
}

interface Input
{
    public function render(): string;
}

class BootstrapButton implements Button
{
    public function render(): string
    {
        return 'Bootstrap Button';
    }
}

class BootstrapInput implements Input
{
    public function render(): string
    {
        return 'Bootstrap Input';
    }
}

interface UIFactory
{
    public function createButton(): Button;

    public function createInput(): Input;
}

class BootstrapFactory implements UIFactory
{
    public function createButton(): Button
    {
        return new BootstrapButton();
    }

    public function createInput(): Input
    {
        return new BootstrapInput();
    }
}
