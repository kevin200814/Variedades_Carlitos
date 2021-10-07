<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Boxicons CDN Link -->
          <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/logo/style.css">

   </head>
<body>
  
  <div class="sidebar">
    <div class="logo-details">
      
      <i class="icon-logo3 icon -2x" id="icon"></i> 
        <div class="logo_name">Variedades Carlitos</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class="fas fa-search "></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Buscar</span>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-boxes "></i>
          <span class="links_name">Agregar Inventario</span>
        </a>
         <span class="tooltip">Agregar Inventario</span>
      </li>
      <li>
       <a href="#">
         <i class='fas fa-cog fa-spin' ></i>
         <span class="links_name">Administrar Inventario</span>
       </a>
       <span class="tooltip">Administrar Inventario</span>
     </li>
      <li>
       <a href="#">
       <i class="fas fa-tshirt"></i>
         <span class="links_name">Productos</span>
       </a>
       <span class="tooltip">Productos</span>
     </li>
     <li>
       <a href="#">
       <i class="fas fa-truck-loading"></i>
         <span class="links_name">Ver Inventario</span>
       </a>
       <span class="tooltip">Ver Inventario</span>
     </li>
      <li>
       <a href="#">
        <i class="fas fa-user"></i>
         <span class="links_name">Usuarios</span>
       </a>
       <span class="tooltip">Usuarios</span>
     </li>
    
     <li>
       <a href="#">
        <i class="fas fa-chart-line"></i>
         <span class="links_name">Contabilidad</span>
       </a>
       <span class="tooltip">Contabilidad</span>
     </li>

     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Abonos</span>
       </a>
       <span class="tooltip">Abonos</span>
     </li>



     <li class="salir">
         <a  href="<?php echo base_url(); ?>LoginController/logout">
         <i class='bx bx-log-out' id="log_out" ></i>
         <span class="links_name">&nbsp; Cerrar sesion</span>
        </a>
        <span class="tooltip">Cerrar Sesion</span>
     </li>
     <div id="page-wrapper">

    </div>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Pucha aqui</div>  

  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
  <script src="https://kit.fontawesome.com/cc794b3cc5.js" crossorigin="anonymous"></script>
</body>
</html>