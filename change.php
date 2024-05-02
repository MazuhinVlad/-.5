<?php
include 'fileget.php';
function lists(string $put): void
{
    $FILES = $put;
    $files = getfiles($FILES);
    print"<h2>$FILES/</h2>";
    foreach ($files as $fil){
        print"<i>".$fil."</i>"."<br>";
    }
}

lists('uploads');
lists('uploads/docs');
lists('uploads/images');
?>