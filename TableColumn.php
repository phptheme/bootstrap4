<?php
/**
 * @copyright Copyright (c) 2018-2019 PhpTheme Dev Team
 * @link http://getphptheme.com
 * @license MIT License
 */
namespace PhpTheme\Bootstrap4;

use PhpTheme\Html\HtmlHelper;

class TableColumn extends \PhpTheme\Html\TableColumn
{

    public $displayExtraSmallOptions = ['class' => ['d-none', 'd-table-cell']];

    public $displaySmallOptions = ['class' => ['d-none', 'd-sm-table-cell']];

    public $displayMediumOptions = ['class' => ['d-none', 'd-md-table-cell']];

    public $displayLargeOptions = ['class' => ['d-none', 'd-lg-table-cell']];

    public $displayExtraLargeOptions = ['class' => ['d-none', 'd-xl-table-cell']];

    public function displayExtraSmall()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displayExtraSmallOptions);

        $this->table->headerOptions = HtmlHelper::mergeAttributes($this->table->headerOptions, $this->displayExtraSmallOptions);

        $this->table->footerOptions = HtmlHelper::mergeAttributes($this->table->footerOptions, $this->displayExtraSmallOptions);

        return $this;
    }

    public function displaySmall()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displaySmallOptions);

        $this->table->headerOptions = HtmlHelper::mergeAttributes($this->table->headerOptions, $this->displaySmallOptions);

        $this->table->footerOptions = HtmlHelper::mergeAttributes($this->table->footerOptions, $this->displaySmallOptions);

        return $this;
    }

    public function displayMedium()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displayMediumOptions);

        $this->table->headerOptions = HtmlHelper::mergeAttributes($this->table->headerOptions, $this->displayMediumOptions);

        $this->table->footerOptions = HtmlHelper::mergeAttributes($this->table->footerOptions, $this->displayMediumOptions);

        return $this;
    }

    public function displayLarge()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displayLargeOptions);

        $this->table->headerOptions = HtmlHelper::mergeAttributes($this->table->headerOptions, $this->displayLargeOptions);

        $this->table->footerOptions = HtmlHelper::mergeAttributes($this->table->footerOptions, $this->displayLargeOptions);

        return $this;
    }    

    public function displayExtraLarge()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displayExtraLargeOptions);

        $this->table->headerOptions = HtmlHelper::mergeAttributes($this->table->headerOptions, $this->displayExtraLargeOptions);

        $this->table->footerOptions = HtmlHelper::mergeAttributes($this->table->footerOptions, $this->displayExtraLargeOptions);

        return $this;
    }

}