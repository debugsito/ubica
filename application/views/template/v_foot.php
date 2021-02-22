</div>
<script src="<?php echo base_url('public/js'); ?>/util.js<?= version(); ?>"></script>
<?php 
if (isset($js)) {
	foreach ($js as $k => $v) {
		?>
		<script src="<?= base_url('/public/js');?>/<?= $v; ?>.js<?= version(); ?>"></script>
		<?php 
	}
}
?>
</body>
</html>