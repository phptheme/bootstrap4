<?php

namespace PhpTheme\Bootstrap4Theme;

class MainLayout extends \PhpTheme\Core\Widget
{

    public $title;

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

}