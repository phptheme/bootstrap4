<?php

namespace PhpTheme\Bootstrap4;

use PhpTheme\Html\HtmlHelper;

class Breadcrumbs extends \PhpTheme\Html\Menu
{

    const MENU_ITEM = BreadcrumbsItem::class;

    public $tag = 'ol';

    public $attributes = [
        'class' => 'breadcrumb'
    ];

    public function toString() : string
    {
        $return = parent::toString();

        $return = HtmlHelper::tag('div', $return, ['aria-label' => 'breadcrumb']);

        return $return;
    }

}