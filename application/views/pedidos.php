<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Consolidado Paisa</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--

Template 2076 Zentro

http://www.tooplate.com/view/2076-zentro

-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style_common.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/styleHover.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/demo.css">
</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Consolidado Paisa</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#team" class="smoothScroll">BIENVENIDO <strong><?php echo strtoupper ($this->session->userdata('name')) ?></strong></a></li>
				<li><a href="<?= base_url(); ?>Welcome/principales" class="smoothScroll">HOME</a></li>
				<li><a href="<?= base_url(); ?>reservas" class="smoothScroll">RESERVAS</a></li>
				<li><a href="<?= base_url(); ?>Pedidos">PEDIDOS</a></li>
				<li><a href="<?= base_url(); ?>Welcome" class="smoothScroll">LOG OUT</a></li>
			</ul>
		</div>
	</div>
</section>







<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
        <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
          <h1 class="heading">PLATOS DEL DIA</h1>
          <hr>
        </div>

<!-- 
				<h1>HAZ TU RESERVA</h1>
        <h2>ONLINE GRATIS!</h2>
        <button href="#gallery" class="smoothScroll btn btn-default" data-toggle="modal" data-target="#mdl_reserva">VER DISPONIBILIDAD</button>   -->
        

          <div class="main">
                <div class="view view-first">
                    <img src="<?= base_url(); ?>assets/images/1.jpg" />
                    <div class="mask">
                        <h2>AJIACO</h2>
                        <p class="pad-width_92">Deliciosa sopa con pechugas de pollo, tres diferentes tipos papa , mazorca y guascas, crema de leche y alcaparras.</p>
                        <a href="#" class="info" data-plato="ajiaco">Añadir</a>
                    </div>
                </div>  
                <div class="view view-first">
                    <img src="<?= base_url(); ?>assets/images/2.jpg" />
                    <div class="mask">
                        <h2>PATACONES VAQUEROS</h2>
                        <p class="pad-width_92"> patacones con guacamole y carne acompañados con salsa casera.</p>
                        <a href="#" class="info" data-plato="patacones">Añadir</a>
                    </div>
                </div>  
                <div class="view view-first">
                    <img src="<?= base_url(); ?>assets/images/3.jpg" />
                    <div class="mask">
                        <h2>BANDEJA PAISA</h2>
                        <p class="pad-width_92">Exótico plato tradicional colombiano (especialidad de la casa).</p>
                        <a href="#" class="info" data-plato="bandeja">Añadir</a>
                    </div>
                </div>  
                <div class="view view-first">
                    <img src="<?= base_url(); ?>assets/images/4.jpg" />
                    <div class="mask">
                        <h2>PIZZA CASERA</h2>
                        <p class="pad-width_92">Deliciosa pizza preparada con los mas frescos productos colombianos.</p>
                        <a href="#" class="info" data-plato="pizza">Añadir</a>
                    </div>
                </div>

                <!-- MENU STCKY -->

                <div class="contenedor" style="display: none;" id="contenedor">
                  <h2 class="st_h2"><b>TRABAJAMOS EN TU PEDIDO!</b>&nbsp;&nbsp; <span class="glyphicon glyphicon-shopping-cart"></span></h2>
                  <fieldset class="col-md-12 row ">
                    <!--*********************  INPUT TEXT  *********************-->
                    <div class="form-group col-md-12">
                      <label for="ajiaco" class="col-md-3 control-label">Ajiaco: &nbsp;</label>
                      <div class="col-md-8 selectContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-cutlery"></i></span>
                          <input type="text" name="ajiaco" id="ajiaco" class="form-control" value="0" readonly>
                          <span class="input-group-addon" id='cant_ajiaco'></span>
                        </div>
                      </div>
                    </div>
                    
                    <!--*********************  INPUT TEXT  *********************-->
                    <div class="form-group col-md-12">
                      <label for="patacones" class="col-md-3 control-label">Patacones: &nbsp;</label>
                      <div class="col-md-8 selectContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-cutlery"></i></span>
                          <input type="text" name="patacones" id="patacones" class="form-control" value="0" readonly>
                          <span class="input-group-addon" id='cant_patacones'></span>
                        </div>
                      </div>
                    </div>
                    
                    <!--*********************  INPUT TEXT  *********************-->
                    <div class="form-group col-md-12">
                      <label for="bandeja" class="col-md-3 control-label">Bandeja paisa: &nbsp;</label>
                      <div class="col-md-8 selectContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-cutlery"></i></span>
                          <input type="text" name="bandeja" id="bandeja" class="form-control" value="0" readonly>
                          <span class="input-group-addon" id='cant_bandeja'></span>
                        </div>
                      </div>
                    </div>
                    
                    <!--*********************  INPUT TEXT  *********************-->
                    <div class="form-group col-md-12">
                      <label for="pizza" class="col-md-3 control-label">Pizza casera: &nbsp;</label>
                      <div class="col-md-8 selectContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-cutlery"></i></span>
                          <input type="text" name="pizza" id="pizza" class="form-control" value="0" readonly>
                          <span class="input-group-addon" id='cant_pizza'></span>
                        </div>
                      </div>
                    </div>

                   <div class="total">
                     <div class="form-group col-md-12" style="background-color: #b5b5b5;height: 53px; width: 112%; margin-top: 7px">
                       <label for="total" class="col-md-3 control-label">TOTAL: &nbsp;</label>
                       <div class="col-md-8 selectContainer">
                         <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                           <input type="text" name="total" id="total" class="form-control" value="0" readonly style="width: 137px;">
                         </div>
                       </div>
                     </div>
                   </div>
                  </fieldset>
                   <button class="btn btn-success" id="btn_solicitar_pedido" onclick="solicitarPedido()">Solicita tu pedido</button>           
                </div>
            </div>
			</div>
		</div>
	</div>		

</section>


<?php if (count($pedidos) > 0){ ?>
  <!-- gallery section -->
<br><br><br>
<section>
    
  <div class="container">
    <div class="row col-md-offset-2 col-md-8 col-sm-12 text-center">
      <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
        <h1 class="heading">TABLA DE PEDIDOS</h1>
        <hr>
      </div>

      <table class="table table-bordered table-striped table-hover" id="table_pedidos">
        <thead style="background-color: #5cb85c;color: #fff;">
          <th>NOMBRE</th>
          <th>DIRECCION</th>
          <th># CONTACTO</th>
          <th>EMAIL</th>
          <th>COSTO</th>
          <th>TIEMPO ESTIMADO</th>
        </thead>
        <tbody>
          <?php for ($i=0; $i < count($pedidos); $i++) { ?> 
            
            <tr>
              <td><?= $pedidos[$i]->a_nombre ?></td>
              <td><?= $pedidos[$i]->direccion ?></td>
              <td><?= $pedidos[$i]->contacto ?></td>
              <td><?= $pedidos[$i]->email ?></td>
              <td>$<?= $pedidos[$i]->costo ?></td>
              <td><?= $pedidos[$i]->estimado ?> minutos</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      
    </div>
  </div>
</section>
<br><br><br>
<?php } ?>  




<div id="mdl_solicitar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #5cb85c;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
        <h3 class="modal-title">Haz tu pedido GRATIS!</h3>
        <h5>Consolidado Paisa</h5></h3>
      </div>
      <div class="modal-body">
          <div class="row">

          <form id="form_pedido" method="post" action="<?= base_url() ?>Pedidos/crearPedido">
            <!--*********************  INPUT DATE  *********************-->
            <div class="form-group col-md-12">
              <label for="mdl_nombre" class="col-md-3 control-label">Nombre: &nbsp;</label>
              <div class="col-md-8 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="mdl_nombre" id="mdl_nombre" required class="form-control" value="<?= $this->session->userdata('nombre') ?>">
                </div>
              </div>
            </div>
            
            <!--*********************  INPUT DATE  *********************-->
            <div class="form-group col-md-12">
              <label for="mdl_email" class="col-md-3 control-label">correo: &nbsp;</label>
              <div class="col-md-8 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="text" name="mdl_email" id="mdl_email" required class="form-control" value="<?= $this->session->userdata('email') ?>">
                </div>
              </div>
            </div>

            <!--*********************  INPUT DATE  *********************-->
            <div class="form-group col-md-12">
              <label for="mdl_direccion" class="col-md-3 control-label">Dirección: &nbsp;</label>
              <div class="col-md-8 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input type="text" name="mdl_direccion" id="mdl_direccion" required class="form-control">
                </div>
              </div>
            </div>

            <!--*********************  INPUT DATE  *********************-->
            <div class="form-group col-md-12">
              <label for="mdl_contacto" class="col-md-3 control-label"># Contacto: &nbsp;</label>
              <div class="col-md-8 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input type="text" name="mdl_contacto" id="mdl_contacto" required class="form-control">
                </div>
              </div>
            </div>

            <!--*********************  INPUT DATE  *********************-->
            <div class="form-group col-md-12">
              <label for="mdl_total" class="col-md-3 control-label">TOTAL: &nbsp;</label>
              <div class="col-md-8 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                  <input type="text" name="mdl_total" id="mdl_total" readonly class="form-control">
                </div>
              </div>
            </div>

            

           </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class='glyphicon glyphicon-remove'></i>&nbsp;Cancelar</button>
        <input type="submit" value="solicitar" form="form_pedido" class="btn btn-success">
      </div>
    </div>
  </div>
</div>


<!-- JAVASCRIPT JS FILES -->	
<script src="<?= base_url(); ?>temp/js/jquery.js"></script>
<script src="<?= base_url(); ?>temp/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>temp/js/jquery.parallax.js"></script>
<script src="<?= base_url(); ?>temp/js/smoothscroll.js"></script>
<script src="<?= base_url(); ?>temp/js/nivo-lightbox.min.js"></script>
<script src="<?= base_url(); ?>temp/js/wow.min.js"></script>
<script src="<?= base_url(); ?>temp/js/custom.js"></script>

</body>

<script>
      function solicitarPedido(){
        var to = $('#total').val();
        $('#mdl_solicitar').modal('show');
        $('#mdl_total').val(to);
      }













  $(function () {
      // $('.info').on('click', function(){
      //   var aca = $(this);
      //   console.log(aca);
      // });
      const platos = document.querySelectorAll('.info');

      platos.forEach(
        //-> podemos usar la forma de funcion flecha
        plato => plato.addEventListener('click', añadirPrecio)// medioante el evento click ejecutamos la funcion playSound
      );

        var cant_ajiaco    = 0;
        var cant_patacones = 0;
        var cant_bandeja   = 0;
        var cant_pizza     = 0;
      function añadirPrecio(event){
        $('#contenedor').show(1000);
        const boton = event.target;
        var plato         = boton.dataset.plato;
        var val_ajiaco    = $('#ajiaco').val();
        var val_patacones = $('#patacones').val();
        var val_bandeja   = $('#bandeja').val();
        var val_pizza     = $('#pizza').val();        

        // ajiaco 15000
        // patacones 10000
        // bandeja 20000
        // pizza 13000

        switch(plato) {
          case 'ajiaco':
              cant_ajiaco++;
              $('#ajiaco').val(parseInt(val_ajiaco) + 15000);
              $('#cant_ajiaco').html(cant_ajiaco);
              break;
          case 'patacones':
              cant_patacones++;
              $('#patacones').val(parseInt(val_patacones) + 10000);
              $('#cant_patacones').html(cant_patacones);
              break;
          case 'bandeja':
              cant_bandeja++;
              $('#bandeja').val(parseInt(val_bandeja) + 20000);
              $('#cant_bandeja').html(cant_bandeja);
              break;
          case 'pizza':
              cant_pizza++;
              $('#pizza').val(parseInt(val_pizza) + 13000);
              $('#cant_pizza').html(cant_pizza);
              break;
          }

          val_ajiaco    = $('#ajiaco').val();
          val_patacones = $('#patacones').val();
          val_bandeja   = $('#bandeja').val();
          val_pizza     = $('#pizza').val();


          var val_total = parseInt(val_ajiaco) + parseInt(val_patacones) + parseInt(val_bandeja) + parseInt(val_pizza);

              $('#total').val(parseInt(val_total));

      }








  });






</script>



</html>
