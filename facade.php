<?php

/**
 * Шаблон Facade упрощает работу со сложной системой.
 * Шаблон программирования гибких объектов (структурный шаблон).
 */
class AuthService
{
    public function login(): string
    {
        return ' login ';
    }
}

class MailService
{
    public function send(): string
    {
        return ' mail ';
    }
}

class UserFacade
{
    public function register(): void
    {
        echo (new AuthService())->login();
        echo (new MailService())->send();
    }
}
