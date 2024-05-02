<?php
function getfiles(string $dir) : array|false
{
    $path = fileget . phpgetcwd() .$dir;
    $arr = scandir($path);
    return array_diff($arr, array('.', '..'));
}
