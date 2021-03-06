<?php

namespace Agee\Services;

class Ajax
{
    private static $response = array();
    private static $isAjax = false;

    public static function setError($value = 'false')
    {
        if (!isset(self::$response['error']))
            self::$response['error'] = $value;
    }

    public static function setWarning($value = 'false')
    {
        if (!isset(self::$response['warning']))
            self::$response['warning'] = $value;
    }

    public static function setResponse($value = array())
    {
        if (!isset(self::$response['response']))
            self::$response['response'] = $value;
    }

    public static function response($values = array())
    {
        self::setError();
        self::setWarning();
        self::setResponse();

        foreach ($values as $key => $value)
            self::$response['response'][$key] = $value;

        return self::$response;
    }

    public static function isAjax()
    {
        return self::$isAjax;
    }

    public static function setAjaxMode()
    {
        self::$isAjax = true;
    }
}