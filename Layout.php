<?php

namespace PhpTheme\Bootstrap4Theme;

class Main extends \PhpTheme\Core\Widget
{

    public $title;

    public function run()
    {
        return $this->render('layout', [
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

}