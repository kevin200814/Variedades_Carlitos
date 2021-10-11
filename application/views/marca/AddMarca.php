<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_marca" value="' . $this->uri->segment(3) . '">';
    $marca = $update->NOMBRE_MARCA;
    

    $accion = "update_marca";
} else {
    $id = "";
    $marca = "";
    
    $accion = "insert_marca";
}
?>
  <section class="home-section">

      <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 float-center">
            <form action="<?= base_url() . 'MarcaController/' . $accion; ?>" method="post" autocomplete="off">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Marca</h3>
                    </div>
                    <div class="card-body">
                        <?php echo $id; ?>
                        <div class="form-group">
                            <label for="marca">Nombre del marca:</label>
                            <input type="text" name="marca" class="form-control" value="<?= $marca; ?>">
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <a class="btn btn-danger" href="<?=base_url().'MarcaController/index';?>">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


  </section>