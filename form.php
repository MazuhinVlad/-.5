<form action="upload.php" method="post" enctype="multipart/form-data">

    <!-- Виберіть файл для завантаження: -->
    <label for="fileToUpload">Виберіть файл для завантаження:<br>
        <input type="file" name="fileToUpload" id="fileToUpload">
    </label>
    <br>
    <!-- Кнопка для завантаження файлу -->
    <input type="submit" value="Завантажити файл" name="submit">
    <br>
    <!-- Кнопка для надання назви файлу -->
    <input type="text" value="Надання назви файлу" name="filename">
    <br>
</form>
<form action="delete.php" method="get">
    <p>
        <label for="fileToDelete">Видалити файл:</label>
        <input type="text" id="fileToDelete" name="file" placeholder="Введіть назву файлу">
        <button type="submit">Видалити файл</button>
</form>

<p>
    <a href="index.php">Go home</a>
</p>
 <?php
    include "change.php";