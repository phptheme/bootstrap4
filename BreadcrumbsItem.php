<?php

namespace PhpTheme\Bootstrap4;

use PhpTheme\Html\HtmlHelper;

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