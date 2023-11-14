<!-- Iniciando session -->
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>P HOUSE E.I.R.L.</title>

    <!-- Loader -->
    <link rel="stylesheet" href="vistas/estilos/loader/loader.css">
    <link rel="shortcut icon" href="vistas/estilos/images/favicon.png" />
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="vistas/estilos/vendors/feather/feather.css">
    <link rel="stylesheet" href="vistas/estilos/vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="vistas/estilos/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  
    <link rel="stylesheet" href="vistas/estilos/css/horizontal-layout-light/estilos.css">
  
    
  
    <link rel="stylesheet" href="vistas/alert/dist/sweetalert2.min.css">
    <script src="vistas/alert/dist/sweetalert2.min.js"></script>
    <script src="vistas/estilos/jquery/jquery-3.7.1.min.js"></script>
</head>

<body>

    <!-- =================================
    CONTENIDO DEL CUERPO
    ================================= -->

    <?php
    
    echo '<div id="loader-container">
            <div class="pixel-loader"></div>
        </div>';

    echo '<div class="container-scroller" id="main-content">';

    if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

        /* =====================================
        MENU
        ===================================== */
        include "modulos/menu.php";

        /* =====================================
        CONTENIDO
        ===================================== */

        if (isset($_GET["ruta"])) {
            if (
                $_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "usuarios" ||
                $_GET["ruta"] == "presupuetos" ||
                $_GET["ruta"] == "proveedores" ||
                $_GET["ruta"] == "materiales" ||
                $_GET["ruta"] == "trabajadores" ||
                $_GET["ruta"] == "equipos_maquinarias" ||
                $_GET["ruta"] == "clientes" ||
                $_GET["ruta"] == "ver_presupuestos" ||
                $_GET["ruta"] == "salir"
            ) {

                include "modulos/" . $_GET["ruta"] . ".php";
            } else {
                include "modulos/404.php";
            }
        } else {
            include "modulos/inicio.php";
        }
    } else {
        include "modulos/login.php";
    }

    echo '</div>'
    ?>

    <!-- script de validaciones -->

    <script src="vistas/js/js.usuarios.js"></script>
    <script src="vistas/js/js.proveedor.js"></script>


    <!-- container-scroller -->

    

    <script src="vistas/estilos/vendors/js/vendor.bundle.base.js"></script>
    
    <script src="vistas/estilos/js/off-canvas.js"></script>
    <script src="vistas/estilos/js/hoverable-collapse.js"></script>
    <script src="vistas/estilos/js/template.js"></script>
    <script src="vistas/estilos/js/settings.js"></script>
    <script src="vistas/estilos/js/todolist.js"></script>
   

    <script src="vistas/estilos/vendors/datatables.net/jquery.dataTabless.js"></script>
    <script src="vistas/estilos/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  
    <script src="vistas/estilos/js/data-table.js"></script>
   
    <script src="vistas/estilos/vendors/flot/jquery.flot.js"></script>
    <script src="vistas/estilos/vendors/flot/jquery.flot.resize.js"></script>
    <script src="vistas/estilos/vendors/chart.js/Chart.min.js"></script>
    <script src="vistas/estilos/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vistas/estilos/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
   
    <script src="vistas/estilos/js/dashboard.js"></script>
    <script src="vistas/estilos/js/todolist.js"></script>
  

    <script src="vistas/estilos/loader/loader.js"></script>
</body>


<!-- Mirrored from demo.bootstrapdash.com/dashflat/template/demo/horizontal-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 17:14:22 GMT -->

</html>