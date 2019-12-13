<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

use PhpTheme\Html\HtmlHelper;

class MainMenuItem extends MenuItem
{

    const SUBMENU = MainMenu2::class;

    public function toString() : string
    {
        if ($this->active)
        {
            $this->linkTag = 'span';
        }

        if (count($this->items) > 0)
        {
            $this->url = '#';

            $this->linkTag = 'a';

            $this->linkAttributes = HtmlHelper::mergeAttributes($this->linkAttributes, [
                'class' => ['dropdown-toggle'],
                'data-toggle' => 'dropdown',
                'aria-haspopup' => "true",
                'aria-expanded' => "false"
            ]);
        }

        return parent::toString();
    }

}