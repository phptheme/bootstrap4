<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

use PhpTheme\Core\HtmlHelper;

class Message extends \PhpTheme\Core\Tag
{

    const TYPE_ERROR = 'error';

    const TYPE_INFO = 'info';

    const TYPE_SUCCESS = 'success';

    public $theme;

    public $type = 'info';

    public $tag = 'div';

    public $message;

    public $errorAttributes = ['class' => 'alert alert-danger'];

    public $infoAttributes = ['class' => 'alert alert-info'];

    public $successAttributes = ['class' => 'alert alert-success'];

    public function getTheme()
    {
        return $this->theme;
    }

    public function toString() : string
    {
        switch ($this->type)
        {
            case self::TYPE_SUCCESS:

                $this->attributes = HtmlHelper::mergeAttributes($this->successAttributes, $this->attributes);

            break;

            case self::TYPE_ERROR:

                $this->attributes = HtmlHelper::mergeAttributes($this->errorAttributes, $this->attributes);

            break;

            case self::TYPE_INFO:

                $this->attributes = HtmlHelper::mergeAttributes($this->infoAttributes, $this->attributes);

            break;
        }

        return parent::toString();
    }

    public function getContent()
    {
        return $this->message;
    }

}