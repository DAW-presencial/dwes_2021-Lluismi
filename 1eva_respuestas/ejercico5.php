<html>
<head>
    <title>Form Upload Files</title>
</head>
<body>
<form enctype="multipart/form-data" action="index.php" method="POST">
    Nombre:
    <input name="nombre" value="nombre"><br>
    Apellido:
    <input name="apellido" value="apellido"><br>
    <input name="fecha" type="date" value="fecha">
    <input type="hidden" name="MAX_FILE_SIZE" value="250000" /> 
    Elige el Archivo a Subir:
    <input name="archivo-a-subir" type="file" /><br/>
    <input name="archivo-a-subir" type="file"><br>
    <input type="submit" value="Subir Archivo" />
</form>
</html>

