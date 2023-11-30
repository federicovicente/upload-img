<?php




//Especifico el directorio de destino
$dir = "../files/";

//Establezco un tamaño máxi de carga por archivo en kb
$size = 200;

//Establezco las extensiones permitidas creando un array
$extensions = ["docx","pdf"];

//Obtengo el nombre del archivo y lo separo de su extensión
$nameFile = explode(".", $_FILES['archivo']['name']);
//Tomo el último elemento de $nameFile (la extensión), la paso a minúsculas y la guardo
$extensionFile = strtolower(end($nameFile));

//Obtengo el nombre especificado en el form
$newName = $_POST['nameFile'];

//Armo la ruta y nombre del archivo
$ruta_carga = $dir . $newName . "." . $extensionFile;


//Verifico que el archivo tenga una extensión válida
if(in_array($extensionFile, $extensions)){
    //Verifico que el archivo no supere el límite establecido
    if($_FILES['archivo']['size'] < ($size * 1024)){
        //Verifico que el directorio existe y sino lo creo
        if(!file_exists($dir)) {
            mkdir($dir, 0777);
        }
        //Guardo el archivo en la carpeta correspondiente
        move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_carga);
    }else{
        //Si supera el límite muestro un mensaje
        echo'El archivo excede el tamaño permitido';
    }
}else{
    //Si la extensión no esta permitida muestro un mensaje
    echo "extensión inválida";
}

?>