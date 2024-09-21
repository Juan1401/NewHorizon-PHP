<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de input</title>
</head>
<body>
    <!-- Formulario -->
    <form action="server.php" method="post" enctype="multipart/form-data">
        <!-- Input simple -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
        <!-- Arreglos -->
        <label>Personas:</label><br>
        <input type="text" name="personas[]" placeholder="Persona 1"><br>
        <input type="text" name="personas[]" placeholder="Persona 2"><br>
        <input type="text" name="personas[]" placeholder="Persona 3"><br>
        <!-- Arrglos asociativos -->
        <label>Persona:</label><br>
        <input type="text" name="persona[nombre]" placeholder="Nombre"><br>
        <input type="text" name="persona[apellido]" placeholder="Apellido"><br>
        <input type="number" name="persona[edad]" placeholder="Edad"><br>
        <!-- Checkbox -->
        <label for="estudiante">Estudiante:</label>
        <input type="checkbox" name="estudiante" value="estudiante""><br>
        <label for="profesor">Profesor:</label>
        <input type="checkbox" name="profesor" value="profesor""><br>
        <label for="invitado">Invitado:</label>
        <input type="checkbox" name="invitado" value="invitado""><br>
        <!-- Radios -->
        <label for="mexico">México</label>
        <input type="radio" name="pais" value="México" id="mexico">

        <label for="colombia">Colombia</label>
        <input type="radio" name="pais" value="Colombia" id="colombia">

        <label for="peru">Perú</label>
        <input type="radio" name="pais" value="Perú" id="peru">

        <!-- Múltiples archivos -->
        <label for="galeria">Carga tus imágenes:</label>
        <input type="file" multiple name="galeria[]" id="galeria">

        <button type="submit">Mandar formulario</button>
        <!-- Envio -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html> 