<?php

/**
 * Шаблон Front Controller предназначен для создания одной точки входа для всех запросов. Контроллер анализирует URL,
 * заголовки или параметры запроса и передает запрос конкретному обработчику Action/Controller.
 * Результат от Action/Controller возвращается обратно на фронт-контроллер для отправки клиенту.
 * Шаблон корпоративных приложений (Enterprise Patterns).
 */
class FrontController
{
    public function dispatch(string $route): void
    {
        echo "Route: $route";
    }
}
