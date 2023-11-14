<?php
if ($_SESSION["perfil"] != "Especial" && $_SESSION["perfil"] != "Administrador") {
  echo '<script>
        window.location = "inicio"
    </script>';
}
?>

<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <h4><b>Administrar materiales</b></h4>
          </div>
          <div class="mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdlMaterial" data-whatever="@getbootstrap">Nuevo material</button>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table tabla_material">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Proveedor</th>
                      <th>Material</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th>Marca</th>
                      <th>Fecha</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $item = null;
                    $valor = null;

                    $proveedor = ControladorProveedores::ctrMostrarProveedor($item, $valor);

                    foreach ($proveedor as $key => $value) {

                      echo '<tr>
                              <td>' . ($key + 1) . '</td>
                              <td>' . $value["nombre_proveedor"] . '</td>
                              <td>' . $value["telefono_proveedor"] . '</td>
                              <td>' . $value["correo_proveedor"] . '</td>
                              <td>' . $value["correo_proveedor"] . '</td>
                              <td>' . $value["direccion_proveedor"] . '</td>
                              <td>' . $value["fecha_proveedor"] . '</td>
                              <td>
                                <div class="btn-group text-center">
                                  <button class="btn mr-1 btn-warning btnEditarProveedor" idProveedor="' . $value["id_proveedor"] . '" data-toggle="modal" data-target="#mdlEditarProveedor" data-whatever="@getbootstrap"><i class="mdi mdi-pencil"></i></button>
                                  <button class="btn btn-danger btnEliminarProveedor" idProveedor="' . $value["id_proveedor"] . '"><i class="mdi mdi-delete"></i></button>
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
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <?php
    include "vistas/modulos/footer.php";
    ?>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>


<!-- ===========================================
    MODAL NUEVO MATERIAL
    =========================================== -->

<div class="modal fade" id="mdlMaterial" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="margin-left: auto;" class="modal-title" id="ModalLabel"><b>Nuevo proveedor</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">

          <!-- Entrada de nombre del proveedor -->
          <div class="form-group">
            <label for="recipient-name">Nombre proveedor:</label>
            <select name="nuevoNombreProveedor" id="nuevoNombreProveedor" class="form-control">
                <option value="">Seleccione proveedor</option>
                <?php
                $item = null;
                $valor = null;

                $proveedor = ControladorProveedores::ctrMostrarProveedor($item, $valor);
                foreach ($proveedor as $key => $value) {
                    echo '<option value="'.$value["id_proveedor"].'">'.$value["nombre_proveedor"].'</option>';
                }
                ?>
            </select>
          </div>
          
          <!-- Entrada de nombre material-->
          <div class="form-group">
            <label for="recipient-name">Nombre del material:</label>
            <input type="text" class="form-control" name="nuevoNombreM" placeholder="Ingrese el el nombre" required>
          </div>

          <!-- Entrada de tipo de material -->
          <div class="form-group">
            <label for="message-text">Tipo de material:</label>
            <input type="text" class="form-control" name="nuevoTipoM" placeholder="Ingrese el tipo" required>
          </div>

          <!-- Entrada de cantidad de material -->
          <div class="form-group">
            <label for="message-text">Cantidad de material:</label>
            <input type="text" class="form-control" name="nuevoCantidadM" placeholder="Ingrese la cantidad" required>
          </div>

          <!-- Entrada de precio de material -->
          <div class="form-group">
            <label for="message-text">Precio de material:</label>
            <input type="text" class="form-control" name="nuevoPrecioM" placeholder="Ingrese le precio" required>
          </div>

          <!-- Entrada de marca de material -->
          <div class="form-group">
            <label for="message-text">Marca de material:</label>
            <input type="text" class="form-control" name="nuevoMarcaM" placeholder="Ingresa la marca" required>
          </div>

          <!-- Botones de guardar y cerrar -->
          <div class="row col-md-auto">
            <button type="button" class="btn btn-light mr-5" data-dismiss="modal" style="margin-left: auto;">Cerrar</button>
            <button type="submit" class="btn btn-primary" style="margin-right: auto;">Guardar</button>
          </div>

          <!-- Guardamos los datos del material -->
          <?php

          /* $crearProveedor = new ControladorProveedores();
          $crearProveedor->ctrCrearProveedor(); */

          ?>

        </form>
      </div>
    </div>
  </div>
</div>


<!-- ===========================================
    MODAL EDITAR MATERIAL
    =========================================== -->

<div class="modal fade" id="mdlEditarProveedor" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="margin-left: auto;" class="modal-title" id="ModalLabel"><b>Editar usuario</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">

          <!-- Entrada de ID escondido -->
          <div class="form-group">
            <input type="hidden" class="form-control" name="idProveedor" id="idProveedor" value="" required>
          </div>
          
          <!-- Entrada de nombre -->
          <div class="form-group">
            <label for="recipient-name">Nombre:</label>
            <input type="text" class="form-control" name="editarNombre" id="editarNombre" value="" required>
          </div>

          <!-- Entrada de telefono -->
          <div class="form-group">
            <label for="message-text">Teléfono:</label>
            <input type="text" class="form-control" name="editarTelefono" id="editarTelefono" value="" required>
          </div>

          <!-- Entrada de correo -->
          <div class="form-group">
            <label for="message-text">Correo:</label>
            <input type="text" class="form-control" name="editarCorreo" id="editarCorreo" value="" required>
          </div>

          <!-- Entrada de direccion -->
          <div class="form-group">
            <label for="message-text">Dirección:</label>
            <input type="text" class="form-control" name="editarDireccion" id="editarDireccion" value="" required>
          </div>

          <!-- Botones de guardar y cerrar -->
          <div class="row col-md-auto">
            <button type="button" class="btn btn-light mr-5" data-dismiss="modal" style="margin-left: auto;">Cerrar</button>
            <button type="submit" class="btn btn-primary" style="margin-right: auto;">Modificar usuario</button>
          </div>

          <!-- Guardamos los datos del usuario -->
          <?php

          /* $editarProveedor = new ControladorProveedores();
          $editarProveedor->ctrEditarProveedor(); */

        
          ?>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- ===========================================
    ELIMINAR USUARIO
    =========================================== -->

<?php
    
/* $borrarProveedor = new ControladorProveedores ();
$borrarProveedor->ctrBorrarProveedor();
 */
?>