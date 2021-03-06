<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Bootstrap4;

class Theme extends \PhpTheme\Core\Theme
{

    const BREADCRUMBS = Breadcrumbs::class;

    const MESSAGE = Message::class;

    const ERROR_MESSAGES = ErrorMessages::class;

    const SUCCESS_MESSAGES = SuccessMessages::class;

    const INFO_MESSAGES = InfoMessages::class;

    const GRID = Grid::class;

    const MENU = Menu::class;

    const LINK = Link::class;

    const POST_LINK = PostLink::class;

    public function breadcrumbs(array $options = [])
    {
        return $this->widget(static::BREADCRUMBS, array_merge($options, ['theme' => $this]));
    }

    public function message(array $options = [])
    {
        return $this->widget(static::MESSAGE, array_merge($options, ['theme' => $this]));
    }

    public function grid(array $params = [])
    {
        return $this->widget(static::GRID, array_merge($params, ['theme' => $this]));
    }

    public function menu(array $params = [])
    {
        return $this->widget(static::GRID, array_merge($params, ['theme' => $this]));
    }

    public function link(array $params = [])
    {
        return $this->widget(static::LINK, array_merge($params, ['theme' => $this]));
    }

    public function postLink(array $params = [])
    {
        return $this->widget(static::POST_LINK, array_merge($params, ['theme' => $this]));
    }

    public function errorMessages(array $params = [])
    {
        return $this->widget(static::ERROR_MESSAGES, array_merge($params, ['theme' => $this]));
    }

    public function infoMessages(array $params = [])
    {
        return $this->widget(static::INFO_MESSAGES, array_merge($params, ['theme' => $this]));
    }

    public function successMessages(array $params = [])
    {
        return $this->widget(static::SUCCESS_MESSAGES, array_merge($params, ['theme' => $this]));
    }

}