<?php
if ($_SESSION["perfil"] != "Especial" && $_SESSION["perfil"] != "Administrador") {
  echo '<script>
        window.location = "inicio"
    </script>';
}
?>



<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <h4><b>Nuevo Presupuesto</b></h4>
          </div>
          <div class="row col-md-12">
            <div class="mb-3 col-md-2">
              <button type="button" id="datosProyecto" style="width: 160px;" class="btn btn-primary" data-toggle="modal" data-target="#mdlProyecto" data-whatever="@getbootstrap">Datos del proyecto</button>
            </div>
            <div class="mb-3 col-md-2">
              <button type="button" id="presMaterial" style="width: 160px;" class="btn btn-primary" data-toggle="modal" data-target="#mdlMaterial" data-whatever="@getbootstrap">Materiales</button>
            </div>
            <div class="mb-3 col-md-2">
              <button type="button" style="width: 160px;" class="btn btn-primary" data-toggle="modal" data-target="#mdlTrabajadores" data-whatever="@getbootstrap">Trabajadores</button>
            </div>
            <div class="mb-3 col-md-2">
              <button type="button" style="width: 160px;" class="btn btn-primary" data-toggle="modal" data-target="#mdlMaterial" data-whatever="@getbootstrap">Metros de terreno</button>
            </div>
            <div class="mb-3 col-md-2">
              <button type="button" style="width: 160px;" class="btn btn-primary" data-toggle="modal" data-target="#mdlMaterial" data-whatever="@getbootstrap">Presupuesto</button>
            </div>
          </div>

          <!-- ==================================
          TABLA PRESUPUESTO DE MATERIALES
          ================================== -->
          <br><br>
          <div class="mb-3">
            <h4>Tabla de presupuesto de materiales</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table tabla_pres_material">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Material</th>
                      <th>Precio Unitario</th>
                      <th>Cantidad</th>
                      <th>Costo Total</th>
                      <th>fecha</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $item = null;
                    $valor = null;

                    $material = ControladorPresMateriales::ctrMostrarPresMaterial($item, $valor);

                    foreach ($material as $key => $value) {

                      echo '<tr>
                              <td>' . ($key + 1) . '</td>
                              <td>' . $value["nombre_material"] . '</td>
                              <td>' . $value["precio_venta_material"] . '</td>
                              <td>' . $value["cantidad_utilizada"] . '</td>
                              <td>' . $value["costo_total"] . '</td>
                              <td>' . $value["fecha_pres_materiales"] . '</td>
                              <td>
                                <div class="btn-group text-center">
                                  <button class="btn btn-danger btnEliminarPresMaterial" idPresMaterial="' . $value["id_pres_mat"] . '"><i class="mdi mdi-delete"></i></button>
                                </div>
                              </td>
                              </tr>';
                    }
                    ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- ==================================
          TABLA PRESUPUESTO DE MATERIALES
          ================================== -->
          <br><br>
          <div class="mb-3">
            <h4>Tabla de presupuesto de trabajadores</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table tabla_pres_trabajador">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Trabajador</th>
                      <th>Trabajo por</th>
                      <th>Sueldo acordado</th>
                      <th>Cantidad de tiempo</th>
                      <th>Costo total</th>
                      <th>fecha</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $item = null;
                    $valor = null;

                    $trabajador = ControladorPresTrabajadores::ctrMostrarPresTrabajador($item, $valor);

                    foreach ($trabajador as $key => $value) {

                      echo '<tr>
                              <td>' . ($key + 1) . '</td>
                              <td>' . $value["nombre_trabajador"] . '</td>
                              <td>' . $value["tiempo_trabajo"] . '</td>
                              <td>' . $value["sueldo_acordado"] . '</td>
                              <td>' . $value["cantidad_tiempo"] . '</td>
                              <td>' . $value["costo_total_trab"] . '</td>
                              <td>' . $value["fecha_pres_traba"] . '</td>
                              <td>
                                <div class="btn-group text-center">
                                  <button class="btn btn-danger btnEliminarPresTrabajador" idPresTrabajador="' . $value["id_pres_trab"] . '"><i class="mdi mdi-delete"></i></button>
                                </div>
                              </td>
                              </tr>';
                    }
                    ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <?php
    include "vistas/modulos/footer.php";
    ?>

  </div>

</div>


<!-- ===========================================
    MODAL DATOS DEL PROYECTO
    =========================================== -->

<div class="modal fade" id="mdlProyecto" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="margin-top: 30px;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="margin-left: auto;" class="modal-title" id="ModalLabel"><b>Nuevo proyecto</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">

          <div class="row col-md-12">
            <!-- Entrada de nombre del cliente -->
            <div class="form-group col-md-3">
              <label for="recipient-name">Nombre del cliente:</label>
              <select name="nuevoNombreCliente" class="form-control">
                <option value="">Seleccione proveedor</option>
                <?php
                $item = null;
                $valor = null;

                $cliente = ControladorClientes::ctrMostrarClientes($item, $valor);
                foreach ($cliente as $key => $value) {
                  echo '<option value="' . $value["id_cliente"] . '">' . $value["nombre_cliente"] . '</option>';
                }
                ?>
              </select>
              <div class="mt-2">
                <a href="clientes" class="btn btn-primary btn-sm">Nuevo Cliente</a>
              </div>
            </div>

            <!-- Entrada de nombre del proyecto-->
            <div class="form-group col-md-3">
              <label for="recipient-name">Nombre del proyecto:</label>
              <input type="text" class="form-control" name="nuevoNombreProyecto" placeholder="Ingrese el nombre del proyecto" required>
            </div>

            <!-- Entrada de ubicacion del proyecto -->
            <div class="form-group col-md-3">
              <label for="message-text">Ubicación del proyecto:</label>
              <input type="text" class="form-control" name="nuevoUbicacionProyecto" placeholder="Ingrese la ubicación del proyecto" required>
            </div>

            <!-- Entrada de fecha del proyecto -->
            <div class="form-group col-md-3">
              <label for="message-text">Fecha del proyecto:</label>
              <input type="date" class="form-control" name="nuevoFechaProyecto" placeholder="Ingrese la fecha" required>
            </div>
          </div>

          <!-- Entrada de descripcion de material -->
          <div class="form-group">
            <label for="message-text">Descripción del proyecto:</label>
            <textarea name="descripcionProyecto" id="DescripcionProyecto"></textarea>
          </div>

          <!-- Botones de guardar y cerrar -->
          <div class="row col-md-auto">
            <button type="button" class="btn btn-light mr-5" data-dismiss="modal" style="margin-left: auto;">Cerrar</button>
            <button type="submit" class="btn btn-primary" style="margin-right: auto;">Guardar</button>
          </div>

          <!-- Guardamos los datos del material -->
          <?php

          $crearProyecto = new ControladorProyecto();
          $crearProyecto->ctrCrearProyecto();

          ?>

        </form>
      </div>
    </div>
  </div>
</div>



<!-- ===========================================
    MODAL PRESUPUESTO DE MATERIALES
    =========================================== -->

<div class="modal fade" id="mdlMaterial" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="margin-top: 30px;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="margin-left: auto;" class="modal-title" id="ModalLabel"><b>Agregar material</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">


          <div class="row col-md-12">

            <!-- Entrada de material -->
            <div class="form-group col-md-3">
              <label for="recipient-name">Material:</label>
              <select name="idMateriales" id="idMateriales" class="form-control">
                <option value="">Seleccione material</option>
                <?php
                $item = null;
                $valor = null;

                $material = ControladorMateriales::ctrMostrarMateriales($item, $valor);
                foreach ($material as $key => $value) {
                  echo '<option value="' . $value["id_material"] . '">' . $value["nombre_material"] . '</option>';
                }
                ?>
              </select>
            </div>

            <!-- Entrada de ID proyecto-->
            <div class="form-group">
              <?php
              $item = null;
              $valor = null;

              $proyecto = ControladorProyecto::ctrMostrarProyectos($item, $valor);

              $ultimoProyecto = end($proyecto);

              if ($ultimoProyecto !== false) {
                echo '<input type="hidden" value="' . $ultimoProyecto["id_proyecto"] . '" name="idProyectoM">';
              } else {
                echo "No se encontraron resultados.";
              }
              ?>
            </div>

            <!-- Entrada de nombre del proyecto-->
            <div class="form-group col-md-3">
              <label for="recipient-name">Precio Unitario:</label>
              <input type="text" class="form-control" id="nuevoPrecioUnitarioM" name="nuevoPrecioUnitarioM" oninput="calcularSuma()" readonly>
            </div>

            <!-- Entrada de cantidad -->
            <div class="form-group col-md-3">
              <label for="message-text">Cantidad:</label>
              <input type="number" class="form-control" id="nuevoCantidadM" name="nuevoCantidadM" oninput="calcularSuma()" required>
            </div>

            <!-- Entrada de suma precio total -->
            <div class="form-group col-md-3">
              <label for="message-text">Precio Total:</label>
              <input type="text" class="form-control" id="resultadoSuma" name="resultadoSuma" placeholder="Precio Total" readonly>
            </div>

          </div>

          <!-- Botones de guardar y cerrar -->
          <div class="row col-md-auto">
            <button type="button" class="btn btn-light mr-5" data-dismiss="modal" style="margin-left: auto;">Cerrar</button>
            <button type="submit" class="btn btn-primary" style="margin-right: auto;">Agregar</button>
          </div>

          <!-- Guardamos los datos del material -->
          <?php

          $crearPresMaterial = new ControladorPresMateriales();
          $crearPresMaterial->ctrCrearPresMaterial();

          ?>

        </form>
      </div>
    </div>
  </div>
</div>



<!-- ===========================================
    MODAL PRESUPUESTO TRABAJADORES
    =========================================== -->

<div class="modal fade" id="mdlTrabajadores" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="margin-top: 30px;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="margin-left: auto;" class="modal-title" id="ModalLabel"><b>Agregar trabajador</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">


          <div class="row col-md-12">

            <!-- Entrada de ID proyecto-->
            <div class="form-group">
              <?php
              $item = null;
              $valor = null;

              $proyecto = ControladorProyecto::ctrMostrarProyectos($item, $valor);

              $ultimoProyecto = end($proyecto);

              if ($ultimoProyecto !== false) {
                echo '<input type="hidden" value="' . $ultimoProyecto["id_proyecto"] . '" name="idProyectoT">';
              } else {
                echo "No se encontraron resultados.";
              }
              ?>
            </div>

            <!-- Entrada del trabjador -->
            <div class="form-group col-md-3">
              <label for="recipient-name">Trabajador:</label>
              <select name="idTrabajadores" id="idTrabajadores" class="form-control">
                <option value="">Seleccione trabajador</option>
                <?php
                $item = null;
                $valor = null;

                $trabajador = ControladorTrabajadores::ctrMostrarTrabajadores($item, $valor);
                foreach ($trabajador as $key => $value) {
                  echo '<option value="' . $value["id_trabajador"] . '">' . $value["nombre_trabajador"] . ' | ' . $value["especialidad_trabajador"] . '</option>';
                }
                ?>
              </select>
            </div>

            <!-- Entrada de cantidad -->
            <div class="form-group col-md-3">
              <label for="message-text">Tiempo:</label>
              <select name="sueldoPorTiempo" id="sueldoPorTiempo" class="form-control">
                <option value="">Seleccione el tiempo</option>
                <option value="dia">Por día</option>
                <option value="semana">Por semana</option>
                <option value="mes">Por mes</option>
                <option value="proyecto">Por proyecto</option>
              </select>
            </div>

            <!-- Entrada de nombre del proyecto-->
            <div class="form-group col-md-2">
              <label for="recipient-name">Sueldo acordado:</label>
              <input type="text" class="form-control" id="nuevoSueldoT" value="0.00" name="nuevoSueldoT" oninput="calcularSumaT()" readonly>
            </div>

            <!-- Entrada de suma precio total -->
            <div class="form-group col-md-2">
              <label for="message-text">Cantidad de tiempo:</label>
              <input type="number" class="form-control" id="nuevoCantidadTT" value="0" name="nuevoCantidadTT" oninput="calcularSumaT()" placeholder="Ingrese la cantidad de tiempo">
            </div>

            <!-- Entrada de suma precio total -->
            <div class="form-group col-md-2">
              <label for="message-text">Precio Total:</label>
              <input type="text" class="form-control" id="resultadoSumaT" name="resultadoSumaT" value="0.00" readonly>
            </div>

          </div>

          <!-- Botones de guardar y cerrar -->
          <div class="row col-md-auto">
            <button type="button" class="btn btn-light mr-5" data-dismiss="modal" style="margin-left: auto;">Cerrar</button>
            <button type="submit" class="btn btn-primary" style="margin-right: auto;">Agregar</button>
          </div>

          <!-- Guardamos los datos del presupuesto del trabajdor -->
          <?php

          $crearPresTrabajador = new ControladorPresTrabajadores();
          $crearPresTrabajador->ctrCrearPresTrabajador();

          ?>

        </form>
      </div>
    </div>
  </div>
</div>




<!-- ===========================================
    ELIMINAR PRESUPUESTO MATERIAL
    =========================================== -->
<?php
$borrarPresMaterial = new ControladorPresMateriales();
$borrarPresMaterial->ctrBorrarPresMaterial();
?>

<!-- ===========================================
    ELIMINAR PRESUPUESTO TRABJADOR
    =========================================== -->
<?php
$borrarPresTrabajador = new ControladorPresTrabajadores();
$borrarPresTrabajador->ctrBorrarPresTrabajador();
?>