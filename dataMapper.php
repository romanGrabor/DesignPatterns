<?php

/**
 * Шаблон Data Mapper отделяет объект от БД. User ничего не знает о запросах к БД (в отличие от Active Record, где $user->save()).
 * UserDataMapper отвечает за сохранение и загрузку.
 * Шаблон баз данных.
 */
class User
{
    public function __construct(
        public string $id,
        public string $name
    ) {
    }
}

class UserDataMapper
{
    public function __construct(
        private PDO $pdo
    ) {
    }

    public function insert(User $user): void
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO users(id,name) VALUES(:id,:name)'
        );

        $stmt->execute([
            'id' => $user->id,
            'name' => $user->name,
        ]);
    }

    public function findById(string $id): ?User
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM users WHERE id=:id'
        );

        $stmt->execute(['id' => $id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new User(
            $row['id'],
            $row['name']
        );
    }
}
