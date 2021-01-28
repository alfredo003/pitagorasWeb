<?php
namespace app\classes;

class Input
{
    /**
 * Retorna um valor via paramentro get
 *
 * @param string $param
 * @param integer $filter
 * @return mixed
 */
    public static function get(string $param,int $filter = FILTER_SANITIZE_STRING)
    {
     return filter_input(INPUT_GET,$param,$filter);
    }

/**
 * Retorna um valor via paramentro post
 *
 * @param string $param
 * @param integer $filter
 * @return mixed
 */
public static function post(string $param,int $filter = FILTER_SANITIZE_STRING)
{
 return filter_input(INPUT_POST,$param,$filter);
}

}