<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>STISLA CI.3</title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome/css/all.min.css'); ?>">
	<!-- CSS Libraries -->

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/components.css'); ?>">
</head>

<body>
	<div id="app">
		<div class="main-wrapper">

			<?php if(isset($navbar) && $navbar==TRUE) {
        $this->load->view('template/components/navbar');
      } ?>

			<?php if(isset($sidebar) && $sidebar==TRUE) {
        $this->load->view('template/components/sidebar');
      } ?>

			<?php $this->load->view($content); ?>

			<?php if(isset($footer) && $footer==TRUE) {
        $this->load->view('template/components/footer');
      } ?>
		</div>
	</div>

	<!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/js/stisla.js');?>"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js');?>"></script>
</body>

</html>
