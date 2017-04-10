<!-- jQuery UI -->
<!-- <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen"> -->
<?php echo $this->Html->css('//code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css'); ?>

<!-- Bootstrap -->
<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<?php echo $this->Html->css('bootstrap.min.css'); ?>
	<!-- styles -->
	<!-- <link href="css/styles.css" rel="stylesheet"> -->
<?php echo $this->Html->css('styles.css'); ?>

			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> -->
	  <!-- <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script> -->
	  <?php echo $this->Html->script('//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js');
	  		echo $this->Html->script('//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js');
	  ?>
	<![endif]-->


	<?php echo $this->Html->css( 'dataTables.bootstrap.css'); ?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- <script src="https://code.jquery.com/jquery.js"></script> -->
	<?php echo $this->Html->script( '//code.jquery.com/jquery.js'); ?>
	<!-- jQuery UI -->
	<!-- <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
	<?php echo $this->Html->script('//code.jquery.com/ui/1.10.3/jquery-ui.js'); ?>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	<?php echo $this->Html->script('bootstrap.min.js'); ?>
	<!-- <script src="vendors/datatables/js/jquery.dataTables.min.js"></script> -->
	<?php echo $this->Html->script('jquery.dataTables.min.js'); ?>

	<!-- <script src="vendors/datatables/dataTables.bootstrap.js"></script> -->
	<?php echo $this->Html->script('dataTables.bootstrap.js'); ?>

	<!-- <script src="js/custom.js"></script> -->
	<?php echo $this->Html->script('custom.js'); ?>
	<!-- <script src="js/tables.js"></script> -->
	<?php echo $this->Html->script('tables.js'); ?>
	<?php echo $this->Html->script('kishida.js'); ?>
	<!-- <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen"> -->
