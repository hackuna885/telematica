<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

$id = (isset($_GET['id'])) ? $_GET['id'] : '';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>UTFV - Telemática 2022</title>
</head>
<body oncontextmenu="return false">
    <div id="app" >
        <div class="wrapper">

            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="img/logo.svg" class="img-fluid">
                        <div class="btnSideBarSe">
                            <button type="button" id="sidebarCollapse2" class="btn btn-secondary mt-3">
                                <i class="fas fa-align-left"></i>
                                <span> Mostrar Contenido</span>
                            </button>
                        </div>
                </div>

                <!-- LINKS MENU -->
                <?php include 'assets/inc/menu.inc'; ?>
                <!-- LINKS MENU -->


            </nav>

            <div id="content">

                <!-- BOTON MENU -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-infoDos">
                            <i class="fas fa-align-left"></i>
                            <span> Mostrar Menú</span>
                        </button>
                    </div>
                </nav>
                <!-- BOTON MENU -->

                <!-- CONTENIDO -->
                <div class="container animate__animated animate__fadeIn">
                    
                    <?php
                        switch ($id) {
                            case 'inicio':
                                include 'assets/inc/inicio.inc';
                                break;
                            case 'horarios':
                                include 'assets/inc/horarios.inc';
                                break;
                            case 'aulas':
                                include 'assets/inc/aulas.inc';
                                break;
                            case 'califica':
                                include 'assets/inc/califica.inc';
                                break;
                            
                            default:
                                include 'assets/inc/inicio.inc';
                                break;
                        }
                    ?>
                    
                </div>
                <!-- CONTENIDO -->

            </div>

        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse2').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    
</body>
</html>