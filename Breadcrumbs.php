<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

use PhpTheme\Core\HtmlHelper;

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

    public function createItem($params = [])
    {
        if (!is_array($params))
        {
            $params = ['label' => $params]; 
        }

        return parent::createItem($params);
    }

    public function getItems() : array
    {
        $return = parent::getItems();

        $keys = array_keys($return);

        if ($keys)
        {
            $last = array_pop($keys);

            $lastItem = $return[$last];

            if ($lastItem->url)
            {
                $lastItem->url = null;
            }
        }

        return $return;
    }

}