<!-- Iniciando session -->
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>P HOUSE E.I.R.L.</title>

    <!-- Loader -->
    <link rel="stylesheet" href="vistas/estilos/loader/loader.css">
    <link rel="shortcut icon" href="vistas/estilos/images/favicon.png" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="vistas/estilos/vendors/feather/feather.css">
    <link rel="stylesheet" href="vistas/estilos/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vistas/estilos/vendors/summernote/dist/summernote-bs4.css">

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
                $_GET["ruta"] == "presupuestos" ||
                $_GET["ruta"] == "clientes" ||
                $_GET["ruta"] == "proveedores" ||
                $_GET["ruta"] == "materiales" ||
                $_GET["ruta"] == "trabajadores" ||
                $_GET["ruta"] == "equiposMaquinarias" ||
                $_GET["ruta"] == "verPresupuestos" ||
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

    <script src="vistas/js/usuarios.js"></script>
    <script src="vistas/js/proveedor.js"></script>
    <script src="vistas/js/materiales.js"></script>
    <script src="vistas/js/trabajadores.js"></script>
    <script src="vistas/js/equipos.maquinarias.js"></script>
    <script src="vistas/js/clientes.js"></script>
    <script src="vistas/js/proyectos.js"></script>
    <script src="vistas/js/pres.material.js"></script>
    <script src="vistas/js/pres.trabajador.js"></script>
    <script src="vistas/js/terreno.js"></script>
    <script src="vistas/js/script.presupuesto.js"></script>
    <script src="vistas/js/ver.presupuesto.js"></script>
    <script src="vistas/js/imprimir.js"></script>


    <!-- container-scroller -->



    <script src="vistas/estilos/vendors/js/vendor.bundle.base.js"></script>
    <script src="vistas/estilos/vendors/summernote/dist/summernote-bs4.min.js"></script>

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

    <script>
    $('#DescripcionProyecto').summernote({
        placeholder: 'Descripción del Proyecto',
        tabsize: 2,
        height: 150
    });
    </script>

    <script>
    // Esperar a que la página se cargue completamente
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener el estado de la clase desde localStorage
        var btnClass = localStorage.getItem('btnClass');

        if (btnClass) {
            // Aplicar la clase al botón
            var datosProyectoBtn = document.getElementById('datosProyecto');
            datosProyectoBtn.classList.add(btnClass);

            // Deshabilitar el botón
            datosProyectoBtn.setAttribute("disabled", "disabled");

            // Limpiar la información de localStorage después de aplicar la clase
            localStorage.removeItem('btnClass');
        }
    });

    </script>
</body>

</html>