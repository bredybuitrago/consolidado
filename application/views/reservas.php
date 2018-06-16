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

  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dist/bootstrap-clockpicker.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/github.min.css">
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
				<h1>HAZ TU RESERVA</h1>
        <h2>ONLINE GRATIS!</h2>
        <button href="#gallery" class="smoothScroll btn btn-default" data-toggle="modal" data-target="#mdl_reserva">VER DISPONIBILIDAD</button>  


			</div>
		</div>
	</div>		
</section>

  <!-- gallery section -->
<br><br><br>
<section>
  <div class="container">
    <div class="row col-md-offset-2 col-md-8 col-sm-12 text-center">
      <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
        <h1 class="heading">TABLA DE RESERVAS</h1>
        <hr>
      </div>

      <table class="table table-bordered table-striped table-hover" id="table_reservas">
        <thead style="background-color: #5cb85c;color: #fff;">
          <th>Comensal</th>
          <th>sillas</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>mesa</th>
        </thead>
        <tbody>
          <?php for ($i=0; $i < count($reservas); $i++) { ?> 
            
            <tr>
              <td><?= $reservas[$i]->user ?></td>
              <td><?= $reservas[$i]->cant ?></td>
              <td><?= $reservas[$i]->day ?></td>
              <td><?= $reservas[$i]->hora ?></td>
              <td><?= $reservas[$i]->mesa ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      
    </div>
  </div>
</section>
<br><br><br>


<div id="mdl_reserva" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #5cb85c;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
        <h3 class="modal-title" id="mdl_res_title">Haz tu reserva online GRATIS!</h3>
        <h5>Consolidado Paisa</h5>
      </div>
      <div class="modal-body">
        <div class="row">

          <form id="form_reserva" method="post" action="<?= base_url() ?>Reservas/crear_reserva">
            <!--*********************  INPUT DATE  *********************-->
            <div class="form-group col-md-12">
              <label for="cant_per" class="col-md-3 control-label">cuantas personas: &nbsp;</label>
              <div class="col-md-8 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="number" name="cant_per" id="cant_per" required class="form-control">
                </div>
              </div>
            </div>
            
            <!--*********************  INPUT DATE  *********************-->
            <div class="form-group col-md-12">
              <label for="day" class="col-md-3 control-label">¿que día?: &nbsp;</label>
              <div class="col-md-8 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="date" name="day" id="day" required class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group col-md-12">
              <label for="day" class="col-md-3 control-label">¿que hora?: &nbsp;</label>
              <div class="col-md-8 selectContainer">
                <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                  <input type="text" class="form-control" value="11:00" id="hora" name="hora">
                  <span class="input-group-addon">
                      <select id="franja" name="franja">
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                      </select>

                  </span>
                </div>
              </div>
            </div>

          </div>
        </form>
          
          



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class='glyphicon glyphicon-remove'></i>&nbsp;Cancelar</button>
        <input type="submit" value="reservar" form="form_reserva" class="btn btn-success">
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
<script src="<?= base_url(); ?>assets/dist/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker()
  .find('input').change(function(){
    console.log(this.value);
  });
var input = $('#single-input').clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  'default': 'now'
});

$('.clockpicker-with-callbacks').clockpicker({
    donetext: 'Done',
    init: function() { 
      console.log("colorpicker initiated");
    },
    beforeShow: function() {
      console.log("before show");
    },
    afterShow: function() {
      console.log("after show");
    },
    beforeHide: function() {
      console.log("before hide");
    },
    afterHide: function() {
      console.log("after hide");
    },
    beforeHourSelect: function() {
      console.log("before hour selected");
    },
    afterHourSelect: function() {
      console.log("after hour selected");
    },
    beforeDone: function() {
      console.log("before done");
    },
    afterDone: function() {
      console.log("after done");
    }
  })
  .find('input').change(function(){
    console.log(this.value);
  });

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
  // Have to stop propagation here
  e.stopPropagation();
  input.clockpicker('show')
      .clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
  $('input').prop('readOnly', true);
}
</script>
<script src="<?= base_url() ?>assets/js/reserva.js"></script>
</body>
</html>
