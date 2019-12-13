<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class UserMenu extends Menu
{

    const MENU_ITEM = UserMenuItem::class;

    public $tag = 'ul';

    public $attributes = [
        'class' => 'nav flex-column'
    ];
    
}