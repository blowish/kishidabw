<?php ?>
<!DOCTYPE html>
<html>
<head>
<title>Bootstrap Admin Theme v3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>

<div class='header'>
	<div class='navbar navbar-default navbar-inverse'>
		<div class='logo'>
			<a class="navbar-brand" href="<?php echo $this->Html->url('/TopPage', true); ?>">　InsightTool Table Search</a>
		</div>
		<button class='navbar-toggle' data-target='#navbar-responsive-collapse' data-toggle='collapse' type='button'>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
		</button>
		<div class='navbar-collapse collapse navbar-right' id='navbar-responsive-collapse'>
			<ul class='nav navbar-nav'>
				<li class=''><?php echo $this->Html->link('ALL', '/AllSearch'); ?></li>
				<li class=''><?php echo $this->Html->link('CombiBarcode', '/combi_barcode'); ?></li>
				<li class=''><?php echo $this->Html->link('Barcode', '/barcode'); ?></li>
				<li class=''><?php echo $this->Html->link('Plate', '/plate'); ?></li>
				<li class=''><?php echo $this->Html->link('Vial', '/vial'); ?></li>
			</ul>
		</div>
	</div>
</div>
	<div class="container">
	<div class="row">
		<h2 class="text-center">Search Tools </h2>
        <hr>
	</div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    All Table Search
                </h4>
                <img src="http://www.remabledesigns.com/bootsnipp/img/201402031158.png" alt="...">
                <a href="<?php echo $this->Html->url('/AllSearch', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    CombiBarcode Table Search
                </h4>
                <img src="http://www.remabledesigns.com/bootsnipp/img/201402031247.png" alt="...">
                <a href="<?php echo $this->Html->url('/combi_barcode', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Barcode Table Search
                </h4>
                <img src="http://www.remabledesigns.com/bootsnipp/img/201402031258.png" alt="...">
                <a href="<?php echo $this->Html->url('/barcode', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Plate Table Search
                </h4>
                <img src="http://www.remabledesigns.com/bootsnipp/img/201402031306.png" alt="...">
                <a href="<?php echo $this->Html->url('/plate', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Vial Table Srarch
                </h4>
                <img src="http://www.remabledesigns.com/bootsnipp/img/201402031311.png" alt="...">
                <a href="<?php echo $this->Html->url('/vial', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>


</body></html>