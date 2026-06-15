<?php
/**
 * Шаблон Observer обеспечивает механизм подписки на события. EmailObserver, SmsObserver, TelegramObserver.
 * Шаблон выполнения задач и представления результатов (поведенческий).
 */
interface Observer
{
    public function update(string $message): void;
}

class EmailObserver implements Observer
{
    public function update(string $message): void
    {
        echo "EMAIL: $message\n";
    }
}

class OrderSubject
{
    private array $observers = [];

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function notify(string $message): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}
