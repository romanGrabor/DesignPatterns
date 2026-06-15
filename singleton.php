<?php

/**
 * Шаблон Singleton гарантирует существование только одного экземпляра объекта.
 * Применим для реализации классов подключения к БД, конфигурации приложения и т. п.
 *
 * Но антипаттерн, так как создает глобальное состояние и усложняет тестирование.
 * Шаблон генерации объектов.
 */
class Database
{
    private static ?Database $instance = null;

    private PDO $pdo;

    private function __construct()
    {
        $this->pdo = new PDO('sqlite::memory:');
    }

    public static function getInstance(): Database
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
