<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<!DOCTYPE html>
<HTML>
<HEAD>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>SUV: Back-End</title>
</HEAD>
<BODY>
<DIV class="cont">


<h1>Lenguajes de programación Back End</h1>
<p><b>Unidad 1.</b> Cliente-Servidor con PHP
</p>

    <DIV class="actividad">
        <h3>1.3. Comunicación entre el cliente y el servidor.</h3>
        <p>La fecha de hoy es: <?php echo date("F j, Y"); ?></p>
        <p>
        <?php
        if (isset($_GET["nombre"]))
        {
          echo '¡Hola ' . $_GET["nombre"] . '!';
        }
        else echo "Hola, desconocido";
        ?>
        </p>

    </DIV>

    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
    <b>Código: </b>394485606<br/>
    <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
    <b>Fecha: </b>8 de marzo 2021</p>

</DIV>

</BODY>
</HTML>