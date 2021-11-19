<style>

  .texto{
    color: rgb(180, 180, 180);
  }
</style>
<link rel="stylesheet" href="<?= base_url("assets/css/cartas_style.css") ?>">
<div class="container">
  <div class="row">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url(); ?>VentaController/index">Productos</a>
      </li> 
      <li class="nav-item">
         <a class="nav-link " href="<?php echo base_url(); ?>VentaController/infoVenta">Venta</a>
      </li>
    </ul>
    
  </div>
</div>



<!--------------------------La otra carta------------------------------------------------------->

<input  class="variation" id="pinkaru2" type="radio" value="5" name="color"/>

<main class="home-section2">
  <?php if(!empty($inventario)){ ?>
    <?php foreach ($inventario as $I): ?>
      <section>
        <form action="<?php echo base_url(); ?>VentaController/nuevaVenta" method="post" autocomplete="off">
         <div class="profile profile-wide">
          <input type="hidden" name="id_producto" value="<?=$I->ID_PRODUCTO; ?>">
          <div class="profile__image"><img src="<?php echo base_url().'assets/productos/'.$I->IMAGEN; ?>" alt="Doggo"/></div>

          <div class="profile__info">
            <h3><?=$I->NOMBRE_PRODUCTO;?></h3>
       <!--  <p class="profile__info__extra"><?=$I->DESCRIPCION;?></p>
        <p class="profile__info__extra">Categoria: <?=$I->TIPO_CATEGORIA;?></p>  -->
      </div>
      <div class="profile__stats">
       <!-- <p class="profile__stats__title">Categoria: <?=$I->TIPO_CATEGORIA;?></p> -->
       <h5 class="profile__stats__info">Descripcion:<b class="texto">&nbsp;<?=$I->DESCRIPCION;?></b></h5>
       <h5 class="profile__stats__info">Categoria:<b class="texto">&nbsp;<?=$I->TIPO_CATEGORIA;?></b> </h5>
       <h5 class="profile__stats__info">Marca:<b class="texto">&nbsp;<?=$I->NOMBRE_MARCA;?></b> </h5>
       <h5 class="profile__stats__info">Color:<b class="texto">&nbsp;<?=$I->NOMBRE_COLOR;?></b></h5>
       <h5 class="profile__stats__info">Para:<b class="texto">&nbsp;<?=$I->TIPO_GENERO;?></b></h5>
       <h5 class="profile__stats__info">Talla:<b class="texto">&nbsp;<?=$I->TALLA;?></b></h5>

        <input type="hidden" name="id_salida" value="<?=$I->ID_SALIDA ?>">
       <input type="hidden" name="id_producto" value="<?=$I->ID_PRODUCTO ?>">
       <input type="hidden" name="nombre_producto" value="<?=$I->NOMBRE_PRODUCTO ?>">
       <input type="hidden" name="tipo_categoria" value="<?=$I->TIPO_CATEGORIA ?>">
       <input type="hidden" name="nombre_color" value="<?=$I->NOMBRE_COLOR ?>">
       <input type="hidden" name="tipo_genero" value="<?=$I->TIPO_GENERO ?>">
       <input type="hidden" name="talla" value="<?=$I->TALLA ?>">
       <input type="hidden" name="nombre_marca" value="<?=$I->NOMBRE_MARCA ?>">
       <input type="hidden" name="stock_actual" value="<?=$I->STOCK_ACTUAL ?>">
       <h5 class="profile__stats__info">Cantidad</h5> 
       <input type="number" class="form-control profile__stats__info" name="cantidad" min="0" max="<?=$I->STOCK_ACTUAL ?>">
     </div>
      <input type="submit" class="button profile__cta btn btn-success" style="text-decoration:none; " value="Agregar a nueva venta">
     
   </div>
 </form>

</section>
<?php endforeach ?>
<?php  }else{?>
  <div class="alert alert-danger col-12 col-sm-12 col-md-12 col-lg-12" role="alert"> ¡No hay productos disponibles en Nueva Venta! </div>
<?php } ?>

</main>