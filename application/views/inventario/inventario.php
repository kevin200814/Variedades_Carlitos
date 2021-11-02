<link rel="stylesheet" href="<?= base_url("assets/css/cartas_style.css") ?>">


<input  class="variation" id="pinkaru" type="radio" value="5" name="color"/>

<main class="home-section">
  <?php if(!empty($inventario)){ ?>
    <?php foreach ($inventario as $I): ?>
      <section>
        <form action="#" method="post" autocomplete="off">
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
       <h5 class="profile__stats__info">Descripcion: <?=$I->DESCRIPCION;?></h5>
       <h5 class="profile__stats__info">Categoria: <?=$I->TIPO_CATEGORIA;?></h5>
       <h5 class="profile__stats__info">Marca: <?=$I->NOMBRE_MARCA;?></h5>
       <h5 class="profile__stats__info">Color: <?=$I->NOMBRE_COLOR;?></h5>
       <h5 class="profile__stats__info">Para: <?=$I->TIPO_GENERO;?></h5>
       <h5 class="profile__stats__info">Talla: <?=$I->TALLA;?></h5>
     </div>
     
     <div class="profile__cta"><a class="button" style="text-decoration:none;">Seleccionar</a></div>
   </div>
 </form>

</section>
<?php endforeach ?>
<?php  }else{?>
  <div class="alert alert-danger col-12 col-sm-12 col-md-12 col-lg-12" role="alert"> ¡No hay productos disponibles! </div>
<?php } ?>

</main>
