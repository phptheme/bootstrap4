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

        $this->headerOptions = HtmlHelper::mergeAttributes($this->headerOptions, $this->displayExtraSmallOptions);

        $this->footerOptions = HtmlHelper::mergeAttributes($this->footerOptions, $this->displayExtraSmallOptions);

        return $this;
    }

    public function displaySmall()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displaySmallOptions);

        $this->headerOptions = HtmlHelper::mergeAttributes($this->headerOptions, $this->displaySmallOptions);

        $this->footerOptions = HtmlHelper::mergeAttributes($this->footerOptions, $this->displaySmallOptions);

        return $this;
    }

    public function displayMedium()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displayMediumOptions);

        $this->headerOptions = HtmlHelper::mergeAttributes($this->headerOptions, $this->displayMediumOptions);

        $this->footerOptions = HtmlHelper::mergeAttributes($this->footerOptions, $this->displayMediumOptions);

        return $this;
    }

    public function displayLarge()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displayLargeOptions);

        $this->headerOptions = HtmlHelper::mergeAttributes($this->headerOptions, $this->displayLargeOptions);

        $this->footerOptions = HtmlHelper::mergeAttributes($this->footerOptions, $this->displayLargeOptions);

        return $this;
    }    

    public function displayExtraLarge()
    {
        $this->options = HtmlHelper::mergeAttributes($this->options, $this->displayExtraLargeOptions);

        $this->headerOptions = HtmlHelper::mergeAttributes($this->headerOptions, $this->displayExtraLargeOptions);

        $this->footerOptions = HtmlHelper::mergeAttributes($this->footerOptions, $this->displayExtraLargeOptions);

        return $this;
    }

}