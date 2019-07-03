<?php

use PHPTheme\Core\Html;

if ($active)
{
    $content = Html::tag($linkTag, $label, $linkOptions);
}
else
{
    $content = Html::tag($activeLinkTag, $label, $linkOptions);
}

echo Html::tag($tag, $content, $options);