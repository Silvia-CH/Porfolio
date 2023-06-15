<?php

class Item
{
    function printNav()
    {
        echo '<nav>
        <ul>
            <a href="index.php">
                <li>Sobre mí</li>
            </a>
        </ul>
        <ul>
            <a href="curriculum.php">
                <li>Curriculum</li>
            </a>
        </ul>
        <ul>
            <div class="user-profile">
                <a href="proyectos.php" id="dropdownMenuLink">
                    <li>Proyectos</li>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="proyectos.php#primero">
                        <li>Primer Curso</li>
                    </a>
                    <a class="dropdown-item" href="proyectos.php#segundo">
                        <li>Segundo Curso</li>
                    </a>
                </div>
            </div>
        </ul>
    </nav>';
    }

    function printFooter()
    {
        echo '<footer>
        <h2>Contacto</h2>
        <div class="info">
            <div>
                <a title="GitHub" href="https://github.com/Silvia-CH"><img id="git" src="../img/github.png" height="30px"></i></a>
                <a title="Linkedin" href="https://www.linkedin.com/in/silvia-de-la-calle-hortigon/"><img src="../img/linkedn.jpg" height="30px"></i></a>
                <p>Email: silviadecahor@gmail.com</p>
                <p>Ubicación: Getafe, 28904 España</p>
            </div>
        </div>
    </footer>';
    }

    function printCardWeb($lista)
    {
        echo
        '<div class="borde">
            <div class="card web">
                <div class="title">
                    <h1>' . $lista[0] . '</h1>
                    <p><em>' . $lista[1] . '</em></p>
                </div>
                <div class="content">
                    <ul>
                        <a title="Click on me!" href="' . $lista[2] . '">
                            <img src="../img/proyectos/' . $lista[3] . '.jpg">
                        </a>
                        <li><em>Descripción:</em> ' . $lista[4] . '</li>
                        <li><em>Lenguajes:</em> ' . $lista[5] . '</li>
                        <a title="Código Fuente" href="' . $lista[6] . '">
                            <li>GitHub</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>';
    }
    function printCardJava($lista)
    {
        $num = 1;
        echo '
        <div class="borde">
            <div class="card java">
                <div class="title">
                    <h1>' . $lista[0] . '</h1>
                    <p><em>' . $lista[1] . '</em></p>
                </div>
                <div class="content">
                    <ul>
                        <img class="imgJava" src="../img/proyectos/' . $lista[2] . '.jpg">
                        <li><em>Descripción:</em> ' . $lista[3] . '</li>
                        <li><em>Lenguajes:</em> ' . $lista[4] . '</li>
                        <a title="Código Fuente" href="' . $lista[5] . '">
                            <li>GitHub</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>';
    }

    function ordenarPrimero($type, $orden)
    {
        require_once('Item.php');
        $item = new Item();
        $lista = $item->infoPrimero();
        if ($orden == 'antiguo') {
            for ($i = 0; $i < sizeof($lista); $i++) {
                switch ($type) {
                    case 'todo':
                        if (sizeof($lista[$i]) == 7) {
                            $item->printCardWeb($lista[$i]);
                        } else {
                            $item->printCardJava($lista[$i]);
                        }
                        break;
                    case 'java':
                        if (sizeof($lista[$i]) == 6) {
                            $item->printCardJava($lista[$i]);
                        }
                        break;
                    case 'web':
                        if (sizeof($lista[$i]) == 7) {
                            $item->printCardWeb($lista[$i]);
                        }
                        break;
                }
            }
        } else {
            for ($i = 0; $i < sizeof($lista); $i++) {
                $size = sizeof($lista) - 1 - $i;
                switch ($type) {
                    case 'todo':
                        if (sizeof($lista[$size]) == 7) {
                            $item->printCardWeb($lista[$size]);
                        } else {
                            $item->printCardJava($lista[$size]);
                        }
                        break;
                    case 'java':
                        if (sizeof($lista[$size]) == 6) {
                            $item->printCardJava($lista[$size]);
                        }
                        break;
                    case 'web':
                        if (sizeof($lista[$size]) == 7) {
                            $item->printCardWeb($lista[$size]);
                        }
                        break;
                }
            }
        }
    }

    function infoPrimero()
    {
        $lista = [
            0 => [
                "Mercado",
                "Primer Trimestre",
                "../proyectos/PFCI/index.html",
                "mercado",
                "Página Web sobre un puesto del mercado.",
                "HTML y CSS",
                "http://www.github.com/Silvia-CH/Mercado"
            ],

            1 => [
                "Wordle",
                "Primer Trimestre",
                "wordle",
                "Recreación de el juego 'La Palabra del Día'. Primer hincapié con validaciones y métodos de Strings y arrays",
                "Java",
                "http://www.github.com/Silvia-CH/Wordle"
            ],

            2 => [
                "Liga",
                "Segundo Trimestre",
                "liga",
                "Gestión de un cuadro de eliminaciones entre equipos. CRUD de un grupo de equipos.",
                "Java",
                "http://www.github.com/Silvia-CH/Liga"
            ],

            3 => [
                "Tic Tac Toe",
                "Segundo Trimestre",
                "../proyectos/tictactoe/index.html",
                "tictactoe",
                "Juego del tres en raya. Primer proyecto con JavaScript. Principalmente uso de eventos",
                "JavaScript + (HTML y CSS)",
                "http://www.github.com/Silvia-CH/TicTacToe"
            ],

            4 => [
                "Multi Jugador",
                "Segundo Trimestre",
                "../proyectos/multiJugador/index.html",
                "multiJugador",
                "Juego de dos personas local (se utiliza el mismo teclado para moverse). Práctica con EventListeners y ClassList",
                "JavaScript + (HTML y CSS)",
                "https://github.com/Silvia-CH/MultiJugador"
            ],

            5 => [
                "CRUD PHP",
                "Tercer Trimestre",
                "../proyectos/CRUD_PHP\php\index.php",
                "crudPHP",
                "CRUD (Create Remove Update Delete) con conexión a base de datos local",
                "PHP + (HTML, CSS y SQL)",
                "https://github.com/Silvia-CH/CRUD_PHP"
            ],

            6 => [
                "Quiz",
                "Tercer Trimestre",
                "quiz1",
                "Test de Personalidad. Seleccionar respuestas a preguntas y sacar un resultado.",
                "Java + (JavaFX y SQL)",
                "http://www.github.com/Silvia-CH/Quiz"
            ],

            7 => [
                "Porfolio",
                "Tercer Trimestre",
                "index.php",
                "porfolio",
                "Porfolio con mis proyectos más relevantes, además de info del curriculum.",
                "PHP + (HTML, CSS)",
                "https://github.com/Silvia-CH/Porfolio"
            ],

            8 => [
                "Proyecto Fin de Curso",
                "Primer Curso",
                "../proyectos/PFC\LM\php\index.php",
                "PFC",
                "Página Web desarrollada a lo largo del curso.",
                "PHP, JavaScript + (HTML, CSS y SQL)",
                "https://github.com/Silvia-CH/PFC"
            ]
        ];
        return $lista;
    }
}
