<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_genero" value="' . $this->uri->segment(3) . '">';
    $genero = $update->TIPO_GENERO;
    

    $accion = "update_genero";
} else {
    $id = "";
    $genero = "";
    
    $accion = "insert_genero";
}
?>
  <section class="home-section">

      <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 float-center">
            <form action="<?= base_url() . 'GeneroController/' . $accion; ?>" method="post" autocomplete="off">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Genero</h3>
                    </div>
                    <div class="card-body">
                        <?php echo $id; ?>
                        <div class="form-group">
                            <label for="genero">Tipo de genero:</label>
                            <input type="text" name="genero" class="form-control" value="<?= $genero; ?>">
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <a class="btn btn-danger" href="<?=base_url().'GeneroController/index';?>">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


  </section>