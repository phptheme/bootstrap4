<?php

use PHPTheme\Core\Html;

$content = '';

foreach($items as $item)
{
    $content .= $item->run();
}

echo Html::tag($tag, $content, $options);