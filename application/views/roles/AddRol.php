<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_rol" value="' . $this->uri->segment(3) . '">';
    $nombre = $update->NOMBRE_ROL;

    $accion = "update_rol";
} else {
    $id = "";
    $nombre = "";

    $accion = "insert_rol";
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 float-center">
            <form action="<?= base_url() . 'RolController/' . $accion; ?>" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rol</h3>
                    </div>
                    <div class="card-body">
                        <?php echo $id; ?>
                        <div class="form-group">
                            <label for="nombre_rol">Nombre del rol:</label>
                            <input type="text" name="nombre_rol" class="form-control" value="<?= $nombre; ?>">
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <a class="btn btn-secondary" href="<?=base_url().'RolController/index';?>">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
