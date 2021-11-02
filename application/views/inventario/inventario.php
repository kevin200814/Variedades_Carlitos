<link rel="stylesheet" href="<?= base_url("assets/css/cartas_style.css") ?>">
	

<input  class="variation" id="pinkaru" type="radio" value="5" name="color"/>

<main class="home-section">
  
<?php foreach ($inventario as $I): ?>
  <section>
    <div class="profile profile-wide">
      <div class="profile__image"><img src="<?=$I->IMAGEN;?>" alt="Doggo"/></div>
      <div class="profile__info">
        <h3><?=$I->NOMBRE_PRODUCTO;?></h3>
        <p class="profile__info__extra"><?=$I->DESCRIPCION;?></p>
      </div>
      <div class="profile__stats">
        <p class="profile__stats__title">Categoria Del Producto</p>
        <h5 class="profile__stats__info"><?=$I->ID_CATEGORIA;?></h5>
      </div>
     
      <div class="profile__cta"><a class="button">Seleccionar</a></div>
    </div>
  </section>
  <?php endforeach ?>
  

</main>
