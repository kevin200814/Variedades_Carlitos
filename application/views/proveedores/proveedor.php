<style>
    div.scrollmenu {

        overflow: auto;
        white-space: nowrap;
    }

</style>
<section class="home-section">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-lg-12">
           <h3>Registro de proveedores</h3>
           <br>
           <?php if ($this->session->userdata('CREAR') == 'Si') : ?>
              <a class="btn btn-primary crear" href="<?= base_url() . 'ProveedorController/nuevoProveedor'; ?>">Nuevo proveedor <i class='bx bxs-color-fill'></i>
              </a>
          <?php else : ?>
              <a class="btn btn-primary crear disabled" href="<?= base_url() . 'ProveedorController/nuevoProveedor'; ?>">Nuevo proveedor <i class='bx bxs-color-fill'></i>
              </a>
          <?php endif; ?>
          <br />
          <hr>
          <div class="scrollmenu">
            <div  style="width: 900px">
               <table id="example" class="table table-hover table-bordered" >
                  <thead class="thead-dark">
                     <tr>
                        <th>ID</th>
                        <th>Proveedor</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody style="background-color:white;">
                 <?php foreach ($proveedor as $p) : ?>
                    <tr>
                       <td><?= $p->ID_PROVEEDOR; ?></td>
                       <td><?= $p->PROVEEDOR_PRODUCTO; ?></td>
                       <td>
                        <a href="<?php echo base_url() . 'ProveedorController/editarProveedor/' . $p->ID_PROVEEDOR; ?>" class="btn btn-success editar">
                             <i class="bi bi-pencil-square"></i>
                         </a>
                         <a href="<?php echo base_url() . 'ProveedorController/eliminarProveedor/' . $p->ID_PROVEEDOR; ?>" class="btn btn-danger eliminar">
                             <i class="bi bi-trash-fill"></i>
                         </a>
                     </td>
                 </tr>
             <?php endforeach ?>
         </tbody>
     </table>
 </div>
</div>
</div>


</section>