<?php

/**
 * Шаблон Null Object, избавляет от проверок на null и исключает появление ошибок типа NullReferenceException и
 * NullPointerException.
 */
interface Logger
{
    public function log(string $message): void;
}

class FileLogger implements Logger
{
    public function log(string $message): void
    {
        echo $message;
    }
}

class NullLogger implements Logger
{
    public function log(string $message): void
    {
    }
}
