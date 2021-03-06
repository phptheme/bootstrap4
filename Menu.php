<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class Menu extends \PhpTheme\Core\Menu
{

    const MENU_ITEM = MenuItem::class;

    public $tag = 'ul';

    public $theme;

    public function getTheme()
    {
        return $this->theme;
    }

}