<?php

/**
 * Шаблон Registry используется как глобальное хранилище объектов, предоставляя глобальный класс-контейнер, из которого
 * компоненты могут получать нужные сервисы самостоятельно.
 * Считается антипаттерном, так как при правильном подходе (Dependency Injection) все зависимости класса передаются явно
 * через конструктор.
 * Шаблон корпоративных приложений (Enterprise Patterns).
 */
class Registry
{
    private static array $data = [];

    public static function set(string $key, mixed $value): void
    {
        self::$data[$key] = $value;
    }

    public static function get(string $key): mixed
    {
        return self::$data[$key] ?? null;
    }
}
