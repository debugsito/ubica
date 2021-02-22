<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css" rel="stylesheet" type="text/css"/>
<?php 
if (isset($flip)) {
	?>
	<script src="<?php echo base_url('public/'); ?>plugins/animate/flip/dist/jquery.flip.min.js" type="text/javascript"></script>
	<?php 
}
if (isset($wow)) {
	?>
	<script src="<?php echo base_url('public/'); ?>plugins/animate/wow/wow.min.js" type="text/javascript"></script>
	<?php 
}
?>
<script type="text/javascript">
	 new WOW().init();
</script>