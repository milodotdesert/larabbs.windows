<?php
/**
 * Created by PhpStorm.
 * User: Milo
 * Date: 2018/9/11
 * Time: 13:18
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}