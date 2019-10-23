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

    public $displayExtraSmallAttributes = ['class' => ['d-none', 'd-table-cell']];

    public $displaySmallAttributes = ['class' => ['d-none', 'd-sm-table-cell']];

    public $displayMediumAttributes = ['class' => ['d-none', 'd-md-table-cell']];

    public $displayLargeAttributes = ['class' => ['d-none', 'd-lg-table-cell']];

    public $displayExtraLargeAttributes = ['class' => ['d-none', 'd-xl-table-cell']];

    public $headerOptions = [];

    public $footerOptions = [];

    public function displayExtraSmall()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displayExtraSmallAttributes);
        
        $this->headerOptions = HtmlHelper::mergeOptions($this->headerOptions, ['attributes' => $this->displayExtraSmallAttributes]);
        
        $this->footerOptions = HtmlHelper::mergeOptions($this->footerOptions, ['attributes' => $this->displayExtraSmallAttributes]);

        return $this;
    }

    public function displaySmall()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displaySmallAttributes);

        $this->headerOptions = HtmlHelper::mergeOptions($this->headerOptions, ['attributes' => $this->displaySmallAttributes]);

        $this->footerOptions = HtmlHelper::mergeOptions($this->footerOptions, ['attributes' => $this->displaySmallAttributes]);

        return $this;
    }

    public function displayMedium()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displayMediumAttributes);

        $this->headerOptions = HtmlHelper::mergeOptions($this->headerOptions, ['attributes' => $this->displayMediumAttributes]);

        $this->footerOptions = HtmlHelper::mergeOptions($this->footerOptions, ['attributes' => $this->displayMediumAttributes]);

        return $this;
    }

    public function displayLarge()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displayLargeAttributes);

        $this->headerOptions = HtmlHelper::mergeOptions($this->headerOptions, ['attributes' => $this->displayLargeAttributes]);

        $this->footerOptions = HtmlHelper::mergeOptions($this->footerOptions, ['attributes' => $this->displayLargeAttributes]);

        return $this;
    }    

    public function displayExtraLarge()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displayExtraLargeAttributes);

        $this->headerOptions = HtmlHelper::mergeOptions($this->headerOptions, ['attributes' => $this->displayExtraLargeAttributes]);

        $this->footerOptions = HtmlHelper::mergeOptions($this->footerOptions, ['attributes' => $this->displayExtraLargeAttributes]);

        return $this;
    }

}