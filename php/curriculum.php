<?php
require_once('Item.php');
$item = new Item();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competencias</title>
    <link rel="stylesheet" href="../style/style.css?ver=1.13">
</head>

<body>
    <div class="fondo"><img src="../img/fondo.jpg" width="100%"></div>
    <?php
    $item->printNav();
    ?>
    <main>
        <a href="../img/CurriculumSCH.pdf">
            <h1>--> CURRICULUM <-- </h1>
        </a>
        <section id="skills">
            <h1>Hard Skills</h1>
            <div class="set">
                <div id="idiom">
                    <h2 class="title">Idiomas</h2>
                    <div class="skill">
                        <h2>Inglés: Nivel C2</h2>
                        <img src="../img/ingles.png" height="100vh">
                    </div>
                    <div class="skill">
                        <h2>Español: Nativo</h2>
                        <img src="../img/espanol.png" height="100vh">
                    </div>
                </div>
                <div id="program">
                    <h2 class="title">Lenguajes de Programación</h2>
                    <div class="skill">
                        <h2>Java</h2>
                        <img src="../img/lenguajes/java.png" height="100vh">
                    </div>
                    <div class="skill">
                        <h2>JDBC</h2>
                        <img src="../img/lenguajes/jdbc.png" height="100vh">
                    </div>
                    <div class="skill">
                        <h2>MySQL</h2>
                        <img src="../img/lenguajes/sql.png" height="100vh">
                    </div>
                    <div class="skill">
                        <h2>HTML + CSS</h2>
                        <img src="../img/lenguajes/html.png" height="100vh">
                    </div>
                    <div class="skill">
                        <h2>JavaScript</h2>
                        <img src="../img/lenguajes/javascript.png" height="100vh">
                    </div>
                    <div class="skill">
                        <h2>PHP</h2>
                        <img src="../img/lenguajes/php.png" height="100vh">
                    </div>
                </div>
            </div>
            <h2 class="title">Proyectos Destacados</h2>
            <div class="proy">
                <h2>Proyecto Fin de Curso</h2>
                <a title="Proyecto Fin de Curso" href="../proyectos/PFC/LM/php/index.php">
                    <img src="../img/proyectos/PFC.jpg">
                </a>
            </div>
            <div class="proy">
                <h2>Concurso: II Edición Conocimiento FP</h2>
                <a title="Info Sobre Concurso" href="https://fpempresa.net/ii-edicion-premios-transferencia-de-conocimiento-de-la-fp/#1684825090958-0854565e-88ab">
                    <img src="../img/concurso.jpg" height="100vh">
                </a>
                <a title="Nuestro Proyecto" href="https://youtu.be/mwijNC3x_WI">
                    <img src="../img/concurso2.jpg" height="100vh">
                </a>
            </div>
            <a id="otros" href="proyectos.php">-> Todos Los Proyectos <-</a>
        </section>
        <!-- <section>
            <h1>Soft Skills</h1>
        </section> -->
    </main>
    <?php
    $item->printFooter();
    ?>
</body>

</html>