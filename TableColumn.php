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

    public $headerAttributes = [];

    public $footerAttributes = [];

    public function displayExtraSmall()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displayExtraSmallAttributes);
        
        $this->headerAttributes = HtmlHelper::mergeAttributes($this->headerAttributes, $this->displayExtraSmallAttributes);
        
        $this->footerAttributes = HtmlHelper::mergeAttributes($this->footerAttributes, $this->displayExtraSmallAttributes);

        return $this;
    }

    public function displaySmall()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displaySmallAttributes);

        $this->headerAttributes = HtmlHelper::mergeAttributes($this->headerAttributes, $this->displaySmallAttributes);

        $this->footerAttributes = HtmlHelper::mergeAttributes($this->footerAttributes, $this->displaySmallAttributes);

        return $this;
    }

    public function displayMedium()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displayMediumAttributes);

        $this->headerAttributes = HtmlHelper::mergeAttributes($this->headerAttributes, $this->displayMediumAttributes);

        $this->footerAttributes = HtmlHelper::mergeAttributes($this->footerAttributes, $this->displayMediumAttributes);

        return $this;
    }

    public function displayLarge()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displayLargeAttributes);

        $this->headerAttributes = HtmlHelper::mergeAttributes($this->headerAttributes, $this->displayLargeAttributes);

        $this->footerAttributes = HtmlHelper::mergeAttributes($this->footerAttributes, $this->displayLargeAttributes);

        return $this;
    }    

    public function displayExtraLarge()
    {
        $this->attributes = HtmlHelper::mergeAttributes($this->attributes, $this->displayExtraLargeAttributes);

        $this->headerAttributes = HtmlHelper::mergeAttributes($this->headerAttributes, $this->displayExtraLargeAttributes);

        $this->footerAttributes = HtmlHelper::mergeAttributes($this->footerAttributes, $this->displayExtraLargeAttributes);

        return $this;
    }

}