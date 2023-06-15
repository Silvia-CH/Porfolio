<?php
require_once('Item.php');
$item = new Item();
if (isset($_GET['var'])) {
    $type = $_POST['type'];
    $order = $_POST['order'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="../style/style.css?ver=1.14">
</head>

<body>
    <div class="fondo"><img src="../img/fondo.jpg" width="100%"></div>
    <?php
    $item->printNav();
    ?>
    <main>
        <div class="filter">
            <button class="filterbtn">Filtros</button>
            <div class="filter-content">
                <form action="proyectos.php?var=true" method="post">
                    <select name="type">
                        <option value="todo" <?php if (isset($_GET['var'])) {
                                                    if ($type == 'todo') {
                                                        echo ' selected';
                                                    }
                                                } ?>>Todo</option>
                        <option value="java" <?php if (isset($_GET['var'])) {
                                                    if ($type == 'java') {
                                                        echo ' selected';
                                                    }
                                                } ?>>Java</option>
                        <option value="web" <?php if (isset($_GET['var'])) {
                                                if ($type == 'web') {
                                                    echo ' selected';
                                                }
                                            } ?>>Web</option>
                    </select>
                    <select name="order">
                        <option value="moderno" <?php if (isset($_GET['var'])) {
                                                    if ($order == 'moderno') {
                                                        echo ' selected';
                                                    }
                                                } ?>>Más Moderno Primero</option>
                        <option value="antiguo" <?php if (isset($_GET['var'])) {
                                                    if ($order == 'antiguo') {
                                                        echo ' selected';
                                                    }
                                                } ?>>Más Antiguo Primero</option>
                    </select>
                    <button id="submit" type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <section id="primero">
            <h1>PRIMERO</h1>
            <div class="tablero">
                <?php
                if (isset($_GET['var'])) {
                    $item->ordenarPrimero($type, $order);
                } else {
                    $item->ordenarPrimero("todo", "moderno");
                }
                ?>
            </div>
        </section>
        <section id="segundo">
            <h1>SEGUNDO</h1>
            <p><em>Estamos trabajando en ello ;)</em></p>
        </section>
    </main>
    <a title="Up!" href="#primero" class="up"><img src="../img/arrow.png" height="80%"></a>
    <?php
    $item->printFooter();
    ?>
</body>

</html>