<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 17/02/2018
 * Time: 10:53 PM
 */

namespace App\Traits;


trait SweetAlert
{
    public static function success($title, $text, $type = 'success', $timer = 3000)
    {
        return [
            'title' => $title,
            'text' => $text,
            'type' => $type,
            'timer' => $timer,
        ];
    }

    public static function warning($title, $text, $type = 'warning', $timer = 3000)
    {
        return [
            'title' => $title,
            'text' => $text,
            'type' => $type,
            'timer' => $timer,
        ];
    }

    public static function info($title, $text, $type = 'info', $timer = 3000)
    {
        return [
            'title' => $title,
            'text' => $text,
            'type' => $type,
            'timer' => $timer,
        ];
    }

    public static function error($title, $text, $type = 'error', $timer = 3000)
    {
        return [
            'title' => $title,
            'text' => $text,
            'type' => $type,
            'timer' => $timer,
        ];
    }
}