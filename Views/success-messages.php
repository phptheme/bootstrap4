<?php

foreach($messages as $message)
{
    echo $this->theme->message(['message' => $message, 'type' => 'success']);
}