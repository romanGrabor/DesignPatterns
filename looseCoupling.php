<?php

/**
 * Шаблон Loose Coupling (слабая связанность). Связь реализуется через интерфейс, а не конкретный класс.
 */
interface Mailer
{
    public function send(): void;
}

class SmtpMailer implements Mailer
{
    public function send(): void
    {
        echo 'SMTP';
    }
}

class UserService
{
    public function __construct(
        private Mailer $mailer
    ) {
    }

    public function register(): void
    {
        $this->mailer->send();
    }
}
