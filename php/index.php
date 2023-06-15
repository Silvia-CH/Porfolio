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
    <title>Sobre mí</title>
    <link rel="stylesheet" href="../style/style.css?ver=1.14">
</head>

<body>
    <div class="fondo"><img src="../img/fondo.jpg" width="100%"></div>
    <?php
    $item->printNav();
    ?>
    <main>
        <div class="sobreMi">
            <div>
                <h1>Técnico en Desarrollo de Aplicaciones Multiplataforma</h1>
                <h2>Silvia de la Calle Hortigón</h2>
            </div>
            <div>
                <p>
                    Programador Multiplataforma,
                    interesada en ampliar mis conocimientos fuera del
                    entorno académico.
                    <br>
                    <br>
                    Tengo experiencia en un amplio catálogo de entornos de desarrollo.
                    <br>
                    <br>
                    Con ganas de aplicar mis conocimientos de programación al ámbito laboral.
                </p>
            </div>
        </div>
        <section id="edu">
            <h1>Formación</h1>
            <div class="sect">
                <h2>Desarrollo de Aplicaciones Multiplataforma</h2>
                <a title="Formación Profesional" href="https://www.imf-formacion.com/">
                    <img src="../img/imf.png" height="100vh">
                </a>
                <h3><span>2022 - 2024</span> IMF Smart Education</h3>
            </div>
            <div class="sect">
                <h2>Bachillerato Tecnológico</h2>
                <a title="Bachillerato" href="https://www.educa2.madrid.org/web/centro.ies.lagunadejoatzel.getafe">
                    <img src="../img/laguna.png" height="150vh">
                </a>
                <h3><span>2020 - 2022</span> IES Laguna de Joatzel</h3>
            </div>
        </section>
    </main>
    <?php
    $item->printFooter();
    ?>
</body>

</html>