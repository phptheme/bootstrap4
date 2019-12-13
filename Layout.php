<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class Layout extends \PhpTheme\Core\ThemeWidget
{

    public $title;

    public function toString() : string
    {
        return $this->render('layout', [
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

}