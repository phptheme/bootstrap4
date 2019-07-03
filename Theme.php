<?php
/**
 * @copyright Copyright (c) 2018-2019 getphptheme.com
 * @link http://getphptheme.com
 * @license MIT License
 */
namespace PHPTheme\Bootstrap4;

class Theme extends \PHPTheme\Core\Theme
{

    const MENU = Menu::class;

    const MENU_ITEM = Menu::class;

    public function menu(array $params = [])
    {
        return $this->widget(static::MENU, $params);
    }

    public function menuItem(array $params = [])
    {
        return $this->widget(static::MENU_ITEM, $params);
    }

}