<?php ?>
<!DOCTYPE html>
<html>
<head>
<title>Vial Table Search</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- [js and css] app/View/Elements/common/jsCss.ctp -->
<?php echo $this->element('common/jsCss'); ?>

</head>
<body>

<!-- [Header] app/View/Elements/common/header.ctp -->
<?php echo $this->element('common/header'); ?>

<div class='col-xs-12'>
<div class='content-box-large'>
<div class='panel-body'>

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
                <a href="<?php echo $this->Html->url('/All', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
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
                <img src="http://www.morovia.com/images/free/barcode.png" alt="...">
                <a href="<?php echo $this->Html->url('/barcode', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Plate Table Search
                </h4>
                <img src="http://www.kibron.com/images/delta-8_dyneplate_scaled.jpg" alt="...">
                <a href="<?php echo $this->Html->url('/plate', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Vial Table Srarch
                </h4>
                <img src="http://www.nucmedcor.com/images/Product-Images/Sterile-Vacuum-Vials/row-of-vials.jpg" alt="...">
                <a href="<?php echo $this->Html->url('/vial', true); ?>" class="btn btn-primary col-xs-12" role="button">Goto Search Page</a>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>

</div>
</div>
</div>

<!-- [Footer] app/View/Elements/common/footer.ctp -->
<?php echo $this->element('common/footer'); ?>

</body>
</html>