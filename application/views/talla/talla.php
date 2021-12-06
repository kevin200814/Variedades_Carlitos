 <style>
    div.scrollmenu {

        overflow: auto;
        white-space: nowrap;
    }

</style>
<section class="home-section">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-lg-12">
           <h3>Registro de Tallas</h3>
           <br>
           <?php if ($this->session->userdata('CREAR') == 'Si') : ?>
              <a class="btn btn-primary crear" href="<?= base_url() . 'TallaController/nueva_talla'; ?>">Nueva talla <i class='bx bxs-color-fill'></i>
              </a>
          <?php else : ?>
              <a class="btn btn-primary crear disabled" href="<?= base_url() . 'TallaController/nueva_talla'; ?>">Nueva talla <i class='bx bxs-color-fill'></i>
              </a>
          <?php endif; ?>

          <br />
          <hr>
            <div class="scrollmenu">
                <div  style="width: 900px">
                   <table id="example" class="table table-hover table-bordered" style="width: 100%">
                        <thead class="thead-dark">
                             <tr>
                                <th>ID</th>
                                <th>Talla</th>
                                <th>Accion</th>
                             </tr>
                        </thead>
                        <tbody style="background-color:white;">
                            <?php foreach ($talla as $c) : ?>
                                <tr>
                                   <td><?= $c->ID_TALLA; ?></td>
                                   <td><?= $c->TALLA; ?></td>
                                   <td>
                                      <a href="<?php echo base_url() . 'TallaController/editar_talla/' . $c->ID_TALLA; ?>" class="btn btn-success editar">
                                         <i class="bi bi-pencil-square"></i>
                                     </a>
                                     <a href="<?php echo base_url() . 'TallaController/eliminar_talla/' . $c->ID_TALLA; ?>" class="btn btn-danger eliminar">
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
    </div>
</section>
<br>
<br>
<br>
<br>