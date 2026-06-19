<?php

/**
 * Шаблон Front Controller предназначен для создания одной точки входа для всех запросов. Front Controller принимает все
 * входящие HTTP-запросы в одном месте, выполняет общую обработку (маршрутизация, авторизация, логирование, обработка
 * ошибок и т.д.) и передает управление соответствующему контроллеру или действию (Action).
 * Контроллер формирует ответ, который затем может быть дополнительно обработан Front Controller и отправлен клиенту.
 * Шаблон корпоративных приложений (Enterprise Patterns).
 */

class UserController
{
    public function index(): void {
        echo 'Список пользователей';
    }
}

class FrontController
{
    public function dispatch(string $route): void
    {
        switch ($route) {
            case '/users':
                (new UserController())->index();
                break;

            default:
                echo '404';
        }
    }
}
