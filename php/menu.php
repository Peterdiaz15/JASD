 <style type="text/css">
  
  nav{
    height: 60px;
    background: transparent !important;
    padding-top: 30px !important;
  }
  .navbar-nav{
    width: 100%;
    margin-right: 10%;
  }
  #navbarNavDropdown{
    z-index: 1;

  }
  .navbar-brand {
    padding-left: 13%;
  }

  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1.5rem;
    padding-left: 0.5rem;
    color: #cccccc !important;
  }
  @media (max-width: 991.98px) { 
    nav{
     padding-top: 22px !important;
     height: 100px;
   }
   #brand{
    height: 80px;
  }
  #img-menu{
    height: 60px;
  }
  .nav-link{
    font-size: 2rem;
  }
  #navbarNavDropdown {
    z-index: 1;
    background: rgba(35,35,35);
    margin-top: 10px;
  }
  #productos>div:first-child {
    width: 100%; 
  }
  #formulario>form {
    width: 90%;
  }
}
/*  @media (max-width: 1500px){
    .titulo{
      font-size: 1rem;
    }
    #navbarNavDropdown{
      z-index: 1;
      margin-top: 6px;
      background: rgba(18,111,172,0.7) !important;
    }
  }
  @media (max-width: 767.98px) {
    #brand{
      height: 25px;
    }
    .navbar-brand {
      padding-left: 0%;
    }
    #navbarNavDropdown{
      margin-top: 10px;
      background: rgba(18,111,172,0.8) !important;
    }
  }

  @media (min-height: 1400px) and (max-width: 1000px){
    nav{
      height: 85px;
    }
    .nav-link{
      font-size: 1.8rem !important;
    }

  }*/

 </style>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="./index.php" style="" id="inicio"><img src="../img/jasd-logo.png" height="60px" id="brand"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""><img src="../img/menu.png" height="20px;" id="img-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item active">
          <a class="nav-link" href="#texto-productos">PRODUCTOS</a>
        </li>
        <li class="nav-item" id="tyc">
          <a class="nav-link active" href="#ubicacion" id="terminos-condiciones">UBICACIÓN</a>
        </li>
        <li class="nav-item" id="tyc">
          <a class="nav-link active" href="#contacto" id="terminos-condiciones">CONTACTO</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link active" href="#">2X1</a>
        </li> -->
      </ul>
    </div>
  </nav>