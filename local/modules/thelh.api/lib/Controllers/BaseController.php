<?php

namespace Thelh\Api\Controllers;

use Bitrix\Main\Engine\ActionFilter;

/**
 * Наследник класса контроллеров битрикса
 *
 * Исключения тоже обрабатываются в json
 * При включении debug в .settings.php показывается вывод вид ошибки
 *
 * @link https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=105&LESSON_ID=6436
 */
class BaseController extends \Bitrix\Main\Engine\Controller
{
    /**
     * Переопределяем префильтры
     *
     * Удаляем csrf и обязательную авторизацию
     *
     * @return void
     */
    protected function getDefaultPreFilters()
    {
        return [
            new ActionFilter\HttpMethod(
                [ActionFilter\HttpMethod::METHOD_GET, ActionFilter\HttpMethod::METHOD_POST]
            ),
            new ActionFilter\Csrf(false)
        ];
    }
}
