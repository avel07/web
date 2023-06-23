<?php

use Bitrix\Main\Routing\Controllers\PublicPageController;
return function(\Bitrix\Main\Routing\RoutingConfigurator $routes)
{
    $routes->get('/zxc/{SECTION_CODE}', [Thelh\Api\Controllers\Catalog::class, 'show'])->where('SECTION_CODE', '[a-zA-Z]+');
};