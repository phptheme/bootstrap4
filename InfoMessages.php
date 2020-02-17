<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class InfoMessages extends \PhpTheme\Core\Widget
{

    public $theme;

    public $messages = [];

    public function toString() : string
    {
        return $this->render('info-messages', [
            'messages' => $this->messages
        ]);
    }

}