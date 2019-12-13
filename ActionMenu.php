<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class ActionMenu extends Menu
{

    const MENU_ITEM = ActionMenuItem::class;

    public $tag = 'ul';

    public $attributes = [
        'class' => 'nav nav-pills justify-content-end',
        'style' => 'float: right;'
    ];

    public function toString() : string
    {
        $return = parent::toString();

        //$return .= '<div style="clear: left;"></div>';

        return $return;
    }

}