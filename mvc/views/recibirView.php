<main id="recibir">
    <html>
    <section>

<h1>Gracias por ponerse en contacto</h1>

<p>

    En la brevedad nos comunicaremos con usted.

</p>

<br>

<p>

    Sus datos:

</p>
<?php
    // llega desde el formulario
    // 3 datos: nombre, email y comentarios


    $destino = "dueño@sitio.com"; //guardamos en una variable el correo que recibirá el mensaje
    $asunto = "Consulta desde el sitio"; //ASUNTO del mensaje


    $nombre1 = $_POST["nombre1"];
    $apellido1 = $_POST["apellido1"];
    $email = $_POST["email"];
    $opciones = $_POST["opciones"];
    $comentario = $_POST["comentario"];


    $cuerpo = "Consulta recibida de ".$_POST["nombre1"]." ".$_POST["apellido1"]. " su mail es ".$_POST["email"]. " su opción elegida fue: ".$_POST["opciones"]. " y su mensaje fue: ".$_POST["comentario"]; //En esta variable guardamos todo lo que ingreso el usuariio para mostrarlo en el cuerpo del correo

    $cabeceras = "From: $nombre1 $apellido1 <$email>";

    if (mail($destino,$asunto,$cuerpo,$cabeceras) ){  //mail() es una palabra reservada de PHP que que requiere 3 variables/parametros para poder funcionar en este orden: DESTINO, ASUNTO, CUERPO/CONTENIDO (se puede agregar una 4 variable/parametro con más contenido)

        echo "Gracias por su consulta";
        echo "<br>";
        echo $cuerpo;

    } else {

        echo "No se pudo, intente mas tarde";
        echo "<br>";
        echo $cuerpo;

    }


    ?>


</section>

    </html>
</main>