<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

use PhpTheme\HtmlHelper\HtmlHelper;

class Theme extends \PhpTheme\Theme\Theme
{

    const BREADCRUMBS = Breadcrumbs::class;

    const TABLE = Table::class;

    const MESSAGE = Message::class;

    const GRID = Grid::class;    

    const GRID_HEADER = GridHeader::class;

    const GRID_CELL = GridCell::class;

    public $breadcrumbsOptions = [];
 
    public $tableOptions = [];

    public $messageOptions = [];

    public function table(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->tableOptions, $options);

        return $this->widget(static::TABLE, array_merge($options, ['theme' => $this]));        
    }

    public function breadcrumbs(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->breadcrumbsOptions, $options);

        return $this->widget(static::BREADCRUMBS, array_merge($options, ['theme' => $this]));
    }

    public function message(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->messageOptions, $options);

        return $this->widget(static::MESSAGE, $options);
    }

    public function grid(array $params = [])
    {
        return $this->widget(static::GRID, array_merge($params, ['theme' => $this]));
    }

    public function createGridCell(array $params = [])
    {
        return $this->createWidget(static::GRID_CELL, $params);
    }

    public function createGridHeader(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER, $params);
    }

}