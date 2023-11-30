<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subir archivos</title>
</head>
<body>
    <form action="./controllers/upload_file.php" method="post" enctype="multipart/form-data">
        Nombre:
        <input type="text" name="nameFile" required>
        Archivo:
        <input type="file" name="archivo" required>
        <button type="submit">Subit</button>

    </form>
</body>
</html>