<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors ->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="" method="POST">
        <!--BASE DE DATOS-->
        <!-- ?php echo $tipo; ?>-->
        <h3>{{ $tipo }}</h3> <!-- es lo mismo que lo de arriba de echo, pero limpian inserciones de javascript-->
        @csrf  <!--genera input oculto con token-->
        <label for="correo">Correo</label><br>
        <input type="text" name="correo" 
            @if ($tipo == 'alumnno')
                value="@alumnos.udg.mx"
            @else
                value="@gmail.com"
            @endif
        ><br>
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="10">
        </textarea>
        <label for="tipo"></label><br>
        <select name="tipo">
            <option value="Alumno">Alumno</option>
            <option value="Empleado">Empleado</option>
        </select><br>
        <input type="submit" value="enviar"></input>
    </form>
</body>
</html>