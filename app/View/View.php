<?php
namespace App\View;


class View
{

   public static function generate($content_view, array $data = [] )
    {
        include APP_ROOT . '/views/' . $content_view;
    }
}