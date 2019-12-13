<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class Post extends \PhpTheme\Core\ThemeWidget
{

    public $title;

    public $url;

    public $created;

    public $description;

    public $text;

    public function toString() : string
    {
        return $this->render('post', [
            'title' => $this->title,
            'created' => $this->created,
            'description' => $this->description,
            'url' => $this->url,
            'text' => $this->text
        ]);
    }

}