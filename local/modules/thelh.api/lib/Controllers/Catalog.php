<?php
namespace Thelh\Api\Controllers;

class Catalog extends BaseController
{
    public function __construct(Request $request = null)
    {
        \Bitrix\Main\Loader::includeModule('catalog');
        parent::__construct($request);
    }

    public function showAction($SECTION_CODE)
    {
        $arResult = [
            'NAME' => 'Название',
            'COME' => $SECTION_CODE
        ];
        return $arResult;
    }
}