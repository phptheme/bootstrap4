<?php
/**
 * @copyright Copyright (c) 2018-2019 PhpTheme Dev Team
 * @link http://getphptheme.com
 * @license MIT License
 */
namespace PhpTheme\Bootstrap4Theme;

class Theme extends \PhpTheme\Bootstrap4\Theme
{

    const LAYOUT = Layout::class;

    const MAIN_LAYOUT = MainLayout::class;

    const MAIN_MENU = MainMenu::class;

    const ACTION_MENU = ActionMenu::class;

    protected $_layout;

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, $params);

        return $this->_layout;
    }

    public function endLayout()
    {
        $this->endWidget($this->_layout);
    }

    public function layout(array $params = [])
    {
        return $this->widget(static::LAYOUT, $params);
    }

    public function mainLayout(array $params = [])
    {
        return $this->widget(static::MAIN_LAYOUT, $params);
    }

    public function mainMenu(array $params = [])
    {
        $class = static::MAIN_MENU;

        return $class::factory($params)->render();
    }

    public function actionMenu(array $params = [])
    {
        $class = static::ACTION_MENU;

        return $class::factory($params)->render();
    }

}