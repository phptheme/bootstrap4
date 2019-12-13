<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class Posts extends \PhpTheme\Core\ThemeWidget
{

    public $items;

    public function toString() : string
    {
        return $this->render('posts', [
            'items' => $this->items
        ]);
    }

}