<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

use PhpTheme\Core\HtmlHelper;

class Grid extends \PhpTheme\Core\Grid
{

    const GRID_CELL = GridCell::class;

    const GRID_HEADER = GridHeader::class;

    public $theme;

    public $defaultAttributes = ['class' => 'table table-hover table-outline table-vcenter text-nowrap card-table'];

    public function getTheme()
    {
        return $this->theme;
    }

}