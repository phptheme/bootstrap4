<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class SuccessMessages extends \PhpTheme\Core\Widget
{

    public $theme;

    public $messages = [];

    public function toString() : string
    {
        return $this->render('success-messages', [
            'messages' => $this->messages
        ]);
    }

}