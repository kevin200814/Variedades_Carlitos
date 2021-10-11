<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_color" value="' . $this->uri->segment(3) . '">';
    $color = $update->NOMBRE_COLOR;
    

    $accion = "update_color";
} else {
    $id = "";
    $color = "";
    
    $accion = "insert_color";
}
?>
  <section class="home-section">

      <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 float-center">
            <form action="<?= base_url() . 'ColoresController/' . $accion; ?>" method="post" autocomplete="off">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Colores</h3>
                    </div>
                    <div class="card-body">
                        <?php echo $id; ?>
                        <div class="form-group">
                            <label for="color">Nombre del color:</label>
                            <input type="text" name="color" class="form-control" value="<?= $color; ?>">
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <a class="btn btn-danger" href="<?=base_url().'ColoresController/vista';?>">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


  </section>