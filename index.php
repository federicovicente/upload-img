<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subir archivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body >
    <div class="container justify-content-center mt-5" style="width:100%">
    <div class="card shadow-lg mt-5" style=" max-width: 700px" id="form-registro">
        <div class="card-body ">
            <h5 class="mt-3 mb-5 text-center ">Subir archivo</h5>
            <form action="./controllers/upload_file.php" method="post" enctype="multipart/form-data">
                Nombre:
                <input class="form-control mb-3" type="text" name="nameFile" placeholder="nombre del archivo" required>
                Archivo:
                <input class="form-control mb-3" type="file" name="archivo" required>
                <button class="btn btn-primary mb-3" type="submit">Subir</button>
            </form>
        </div>
    </div>
    </div>





</body>

</html>