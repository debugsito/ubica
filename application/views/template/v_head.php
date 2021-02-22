<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Ubica</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" type="image/png" href="<?php echo base_url('public/img/'); ?>favicon.png" />
	<!-- CSS Files -->
	<script>
		const base_url 		= "<?php echo base_url(); ?>";
		<?php 
		$log = (isset($_SESSION['logged_in']))?$_SESSION['logged_in']:false;
		$logged = ($log==true) ? 'log' : 'notlog';
		?>
		const logged = "<?php echo $log; ?>";
		
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/fonts/Linearicons-Free/Web_Font/"); ?>style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/fonts/Nexa/"); ?>stylesheet.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/bootstrap/css/"); ?>bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="<?php echo base_url("public/bootstrap/js/"); ?>bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url("public/bootstrap/js/"); ?>bootstrap.min.js"></script>

	<script> const app_id = "<?php echo APP_ID_FB; ?>"; </script><!--  FACEBOOK API -->
	<script> const id_google = "<?php echo ID_GOOGLE; ?>"; </script><!--  FACEBOOK API -->
	<script> const secret_google = "<?php echo SECRET_KEY_GOOGLE; ?>"; </script><!--  FACEBOOK API -->
	
	
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="<?php echo ID_GOOGLE; ?>">
	
	<?php
	if (isset($plugins)) {
		foreach ($plugins as $key => $plugin) {
			echo $plugin;
		}
	}
	?>	
	<?php 
	
	$this->load->view('plugins/Validator');
	$this->load->view('plugins/nakupanda');
	$this->load->view('plugins/loadingModal');
	$this->load->view('plugins/Alertify');
	$this->load->view('plugins/SweetAlert');
	$this->load->view('plugins/mustache');
	?>
	
	<script type="text/javascript" src="<?= base_url('public/plugins/moment/moment.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('public/plugins/moment/moment-with-locales.min.js');?>"></script>
	<script>
		moment.locale('es'); 
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/"); ?>custom.css<?php version() ?>"/>
</head>

<body data-background-color="bg3" class="<?php echo $this->router->class; ?>" style="margin:0; ">


	<div>