<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>Fromylario de Contacto</h1>
    <form action="" method="POST">
        <label for="correo"></label><br>
        <input type="email" name="correo"><br>
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="10">
        </textarea>
        <label for="tipo"></label><br>
        <select name="tipo">
            <option value="Alumno">Alumno</option>
            <option value="Empleado">Empleado</option>
        </select><br>
        <input type="sumbit" value="enviar">
    </form>
</body>
</html>