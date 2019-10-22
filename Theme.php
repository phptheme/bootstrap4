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

    public $tableOptions = [];

    public function table(array $options = [])
    {
        $options = HtmlHelper::mergeAttributes($this->tableOptions, $options);

        $options['theme'] = $this;

        $class = static::TABLE;

        $table = $class::factory($options);

        return $table->render();
    }

    public function breadcrumbs(array $params = [])
    {
        return $this->widget(static::BREADCRUMBS, $params);
    }

}