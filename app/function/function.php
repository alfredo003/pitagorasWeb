<?php

function dd($params = [], $die = true)
{
    echo '<pre>';
    print_r($params);
    echo '</pre>';
    if ($die) die();
}
/**
 * Undocumented function
 *
 * @param string $url
 * @return void
 */
function redirect(string $url)
{
    header('location' . $url);
    exit;
}
