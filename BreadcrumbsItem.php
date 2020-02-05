<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

use PhpTheme\Core\HtmlHelper;

class BreadcrumbsItem extends \PhpTheme\Html\MenuItem
{

    public $attributes = [
        'class' => 'breadcrumb-item'
    ];

    public function toString() : string
    {
        if (!$this->url)
        {
            $this->attributes = HtmlHelper::mergeAttributes($this->attributes, [
                'class' => ['active'],
                'aria-current' => 'page'
            ]);
        }

        $return = parent::toString();

        return $return;
    }

}