<?php function auto_copyright($year = 'auto'){ ?>
	
	<?php if(intval($year) == 'auto'){ $year = date('Y'); } ?> 
	<p> &copy; <?php if(intval($year) == date('Y')){echo intval($year); } ?> </p>
	<?php if(intval($year) < date('Y')){echo 2015 . ' - ' . date('Y'); } ?> 
	<?php if(intval($year) > date('Y')){echo date('Y'); } ?> 
<?php } ?>

<?php auto_copyright();
?>