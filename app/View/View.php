<?php
namespace App\View;
class View
{

   public static function generate($content_view, $data = null)
    {
        include APP_ROOT . '/views/' . $content_view;
    }
}