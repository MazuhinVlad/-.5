<?php

if(isset($_GET["file"]) && $_GET["file"] !== ''){
    $fileToDelete = $_GET["file"];
    // Перевірка чи файл існує та видалення його
    if(file_exists("uploads/docs/" . $fileToDelete)){
        unlink("uploads/docs/" . $fileToDelete);
        echo "Документ $fileToDelete успішно видалено.";
    }
    elseif(file_exists("uploads/images/" . $fileToDelete)){
        unlink("uploads/images/" . $fileToDelete);
        echo "Зображення $fileToDelete успішно видалено.";
    }
    else{
        echo "Файл $fileToDelete не існує.";
    }
}
else{
    echo "Файл не був вибраний.";
}

?>
<p>
    <a href="index.php">Go home</a>
</p>