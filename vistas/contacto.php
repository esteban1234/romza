<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

    <header>
    <figure class="logo pull-left">
      <a href="../index.php"><img src="../img/nuup.jpg" alt="NUUP" class="img-responsive"></a>
    </figure>

    <div class="textoheader pull-right">
      <a class="unete" href="contacto.php">UNETE A NUESTRO EQUIPO</a>
      <p class="textopheader">"Valores y servicios diferenciados que exceden <br> a las expectativas"</p>
    </div>
  </header>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">NUUP</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse" >
    <ul class="nav navbar-nav" style="">
      <li><a href="../index.php">INICIO</a></li>
      <li><a href="nosotros.php">NOSOTROS</a></li>
      <li><a href="servicios.php">SERVICIOS</a></li>
      <li class="active"><a href="contacto.php">CONTACTO</a></li>
    </ul>
  </div>
</nav>

<div class="bannerc">
  <p class="tit">PROVEEDOR LIDER <br> EN SOLUCIONES DE CALIDAD</p>
  <hr class="linea3">

  <p class="subtit">Para nosotros su comunicación es muy importante, agradecemos nos brinde los siguientes datos para atenderle mejor.</p>
</div>

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Datos de la empresa y formulario</strong></h3>
    </div>
  
  <div class="row">
    <div class="col-md-7">
      <div class="row">
        <div class="col-md-5">
          <h4 class="text-center">DIRECCION</h4>
          <p class="text-center">C.15 #318 por 38 y 60 Col. Fracc. del Norte, Mérida, Yucatan. C.P. 97120</p>
        </div>
        <div class="col-md-5">
          <h4 class="text-center">HORARIO</h4>
          <p class="text-center">Lunes a Viernes de 9 am a 6 pm</p>
        </div>
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-5">
        <h4 class="text-center">CORREO</h4>
          <p class="text-center">info@administradoranuup.com</p>
        </div>
        <div class="col-md-5">
          <h4 class="text-center">TELEFONO</h4>
          <p class="text-center">PENDIENTE</p>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.1652516194606!2d-89.62237991654123!3d21.006221597786393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676a919479279%3A0xfd5b7144c72f081!2sCalle+15+318%2C+Campestre%2C+97120+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1510006035489" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Formulario</strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Escribe tu nombre completo">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="Escribe tu correo electronico">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Escribe tu número teléfonico">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Escribe tu comentario"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> ENVIAR
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
