<!DOCTYPE html>
<html>
    <head>
        <title>Segunda aplicación web de animales</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Este es un sitio para practicar CSS y otros elementos">

        <link rel="stylesheet" href="css/styles.css" type="text/css">
    </head>
    <body>
        <div class="navbar">
            <div class="container">
                <ul class="nav navbar-nav">
                   <li><a href="index.html">Inicio</a></li> 
                   <li><a href="index.html">Agregar</a></li> 
                </ul>
            </div>
        </div>
        <div class="container">
            <h1>Registro de animales</h1>
            <h2>Ingrese los datos solicitados</h2>

           <form action="">

                <label for="apodo">Apodo:</label>
                <input type="text" maxlength="100" id="apodo">

                <label for="especie">Especie:</label>
                <input type="text" maxlength="100" id="especie">

                <label for="color">Color:</label>
                <input type="text" maxlength="100" id="color">
           </form>
        </div>
    </body>
</html>