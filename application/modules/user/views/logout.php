<?php  include APPPATH."views/templates/header.php";?>
<?php  $navbar = (isset($_SESSION['auth'])) ? include APPPATH."views/templates/navbar_in.php" : include APPPATH."views/templates/navbar_out.php";?>


<script>
	var logoutModule = angular.module( "<?php echo $angular_module; ?>", [] );
</script>

<?php  include APPPATH."views/templates/footer.php";?>