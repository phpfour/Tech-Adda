<?php

/**
 * ViewHelper
 *
 * Provides various helper method for working with views.
 *
 */

class ViewHelper
{
    protected static $config;

    public static function setConfig($config)
    {
        self::$config = $config;
    }

    public static function config($key)
    {
        return self::$config->get($key);
    }

    public static function url($path = '', $return = false)
    {
        if ($return) {
            return self::$config->get('url.base') . $path;
        } else {
            echo self::$config->get('url.base') . $path;
        }
    }

    public static function alertMessage($content, $type = 'warning')
    {
        echo <<<MSG
<div class="alert-message $type">
    <a class="close" href="#">×</a>
    <p>$content</p>
</div>
MSG;
    }

    public static function flushMessage()
    {
        if (!empty($_SESSION['flash']['message'])) {
            $type = isset($_SESSION['flash']['type']) ? $_SESSION['flash']['type'] : 'warning';
            ViewHelper::alertMessage($_SESSION['flash']['message'], $type);
            unset($_SESSION['flash']);
        }
    }

    public static function formatDate($date)
    {
        return date("d M Y", strtotime($date));
    }
}