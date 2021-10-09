<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_usuario" value="' . $this->uri->segment(3) . '">';
    $nombre = $update->NOMBRE_USUARIO;
    $nick = $update->NICK_USUARIO;
    $correo = $update->CORREO_USUARIO;
    $contrasenia = $update->CONTRASENIA_USUARIO;
    $fecha_cambios = $update->FECHA_CAMBIOS;
    $id_rol = $update->ID_ROL;

    $accion = "update_usuario";
} else {
    $id = "";
    $nombre = "";
    $nick = "";
    $correo = "";
    $contrasenia = "";
    $fecha_cambios = "";
    $id_rol = "";

    $accion = "insert_usuario";
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 float-center">
            <form action="<?= base_url() . 'UsuarioController/' . $accion; ?>" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Usuario</h3>
                    </div>
                    <div class="card-body">
                        <?php echo $id; ?>
                        <div class="form-group">
                            <label for="nombre">Nombre del usuario:</label>
                            <input type="text" name="nombre" class="form-control" value="<?= $nombre; ?>">
                        </div>

                        <div class="form-group">
                            <label for="nick">Nick del usuario:</label>
                            <input type="text" name="nick" class="form-control" value="<?= $nick; ?>">
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="text" name="correo" class="form-control" value="<?= $correo; ?>">
                        </div>

                        <div class="form-group">
                            <label for="contrasenia">Contraseña:</label>
                            <input type="text" name="contrasenia" class="form-control" value="<?= $contrasenia; ?>">
                        </div>

                        <div class="form-group">
                            <label for="fecha_cambios">Fecha de cambios:</label>
                            <input type="date" name="fecha_cambios" class="form-control" value="<?= $fecha_cambios; ?>">
                        </div>

                        <div class="form-group">
                            <label for="id_rol">Rol:</label>
                            <select name="id_rol" class="form-control">
                                <option>Seleccionar</option>
                                <?php foreach ($roles as $r): ?>
                                    <?php if ($accion == 'insert_usuario'): ?>
                                        <option value="<?=$r->ID_ROL;?>"><?=$r->NOMBRE_ROL;?></option>
                                    <?php else: ?>
                                        <option value="<?=$r->ID_ROL?>"<?=$r->ID_ROL == $id_rol ? 'selected' : ""; ?>>
                                            <?=$r->NOMBRE_ROL; ?>
                                        </option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <a class="btn btn-secondary" href="<?=base_url().'UsuarioController/index';?>">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
