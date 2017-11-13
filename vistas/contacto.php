<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

   <header>
  <nav class="pull-left">
    <ul>
      <a class="selector" href="../index.php">INICIO</a>
      <a class="selector" href="nosotros.php">NOSOTROS</a>
      <a class="selector" href="servicios.php">SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php">CONTACTO</a>
    </ul>
  </nav>

  <figure class="logo pull-right animated bounceInRight">
    <img src="../img/romza.png" alt="ROMZA" class="img-responsive">
  </figure>
  <div class="op-menu">
      <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
    </div>
</header>

<div class="bannerc">
  <div class="fondo2 animated bounceInLeft">
    <p class="tit">Contacto<br> Estamos para servirte </p>
  </div>
</div>

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
                <p class="ts"> 
                    Llene el siguiente formulario y ponganse en contacto con nosotros, un especialista lo atenderá.
                </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-7 col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre completo</label>
                             <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon fa fa-user"></span>
                              </span>
                              <input type="text" class="form-control" id="txtNOMBRE" placeholder="Escribe tu nombre completo" required="required" /></div>   
                            
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="txtCORREO" placeholder="Escribe tu correo electrónico" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Teléfono</label>
                              <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon fa fa-phone"></span>
                              </span>
                              <input type="text" class="form-control" id="txtTELEFONO" placeholder="Escribe tu número teléfonico" required="required" /></div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Comentario</label>
                            <textarea name="message" id="txtCOMENTARIO" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Escribe tu comentario"></textarea>
                        </div>
                    </div>
                    <div id="_AJAX_PRE_" class="col-lg-12"></div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-danger pull-right" id="btnContactUs" onclick="sendCORREO()">
                            Enviar Mensaje</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-sm-5 col-md-4">
            <form>
            <legend><span class="glyphicon fa fa-globe"></span> Datos de la empresa</legend>
            <address>
                <strong>Dirección</strong><br>
                Av. 6-A Sur Poniente #367 <br>
                Col. San Pascualito,<br>
                Tuxtla Gutierrez, Chiapas. C.P. 29000 <br>
            </address>
            <address>
                <strong>Correo</strong><br>
                <a href="mailto:info@mantenimientoromza.com">info@mantenimientoromza.com</a>
            </address>
            <address>
                <strong>Teléfono</strong><br>
                PENDIENTE
            </address>
            <address>
                <strong>Horario</strong><br>
                Lunes a Viernes de 9 am a 6 pm
            </address>
            </form>
        </div>
    </div>
</div>

<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.557730368764!2d-93.12162538575677!3d16.748905125314334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd8f513ba91df%3A0xa8a5f527199a12a!2sAv.+Sexta+Sur+Pte.+367%2C+El+Calvario%2C+29000+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1510180828569" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
