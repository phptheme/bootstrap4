<?php
/**
 * @copyright Copyright (c) 2018-2019 PhpTheme Dev Team
 * @link http://getphptheme.com
 * @license MIT License
 */
namespace PhpTheme\Bootstrap4;

use PhpTheme\Html\HtmlHelper;

class Theme extends \PhpTheme\Core\Theme
{

    const BREADCRUMBS = Breadcrumbs::class;

    const TABLE = Table::class;

    const MESSAGE = Message::class;

    public $tableOptions = [];

    public $breadcrumbsOptions = [];

    public $messageOptions = [];

    public function table(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->tableOptions, $options);

        return $this->widget(static::TABLE, $options);        
    }

    public function breadcrumbs(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->breadcrumbsOptions, $options);

        return $this->widget(static::BREADCRUMBS, $options);
    }

    public function message(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->messageOptions, $options);

        return $this->widget(static::MESSAGE, $options);
    }

}