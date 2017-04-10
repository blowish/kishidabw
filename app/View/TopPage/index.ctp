<?php ?>
<!DOCTYPE html>
<html>
<head>
<title>Vial Table Search</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- [js and css] app/View/Elements/common/jsCss.ctp -->
<?php echo $this->element('common/jsCss'); ?>

<style type="text/css">
    .shape{
	border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer-radius{
	border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
	border-color: rgba(255,255,255,0) #5cb85c rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
	border-color: rgba(255,255,255,0) #999999 rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
	border-color: rgba(255,255,255,0) #428bca rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
	border-color: rgba(255,255,255,0) #5bc0de rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
	border-color: rgba(255,255,255,0) #f0ad4e rgba(255,255,255,0) rgba(255,255,255,0);
}

.shape-text{
	color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
}
.offer-content{
	padding:0 20px 10px;
}
</style>

</head>
<body>

<!-- [Header] app/View/Elements/common/header.ctp -->
<?php echo $this->element('common/header'); ?>


	<div class="container">
		<div class="row">
			<h2 class="text-center">Search Tools </h2>
	        <hr>
		</div>
		<div class="row">
			<div class="col-xs-4 col-md-4">
				<a href="<?php echo $this->Html->url('/All', true); ?>">
				<div class="offer offer-radius offer-danger">
					<div class="shape">
						<div class="shape-text">
							top
						</div>
					</div>
					<div class="offer-content">
						<h4 class="lead">
							All Table Search
						</h4>
						<p>
							Click Here to Goto Search Page
							<br>
							<br>
						</p>
					</div>
				</div>
				</a>

				<a href="<?php echo $this->Html->url('/plate', true); ?>">
				<div class="offer offer-radius offer-warning">
					<div class="shape">
						<div class="shape-text">
							top
						</div>
					</div>
					<div class="offer-content">
						<h4 class="lead">
							Plate Table Search
						</h4>
						<p>
							Click Here to Goto Search Page
							<br>
							<br>
						</p>
					</div>
				</div>
				</a>

			</div>

			<div class="col-xs-4 col-md-4">

				<a href="<?php echo $this->Html->url('/combi_barcode', true); ?>">
				<div class="offer offer-radius offer-info">
					<div class="shape">
						<div class="shape-text">
							top
						</div>
					</div>
					<div class="offer-content">
						<h4 class="lead">
							CombiBarcode Table Search
						</h4>
						<p>
							Click Here to Goto Search Page
							<br>
							<br>
						</p>
					</div>
				</div>
				</a>

				<a href="<?php echo $this->Html->url('/vial', true); ?>">
				<div class="offer offer-radius offer-primary">
					<div class="shape">
						<div class="shape-text">
							top
						</div>
					</div>
					<div class="offer-content">
						<h4 class="lead">
							Vial Table Srarch
						</h4>
						<p>
							Click Here to Goto Search Page
							<br>
							<br>
						</p>
					</div>
				</div>
				</a>

			</div>
			<div class="col-xs-4 col-md-4">

				<a href="<?php echo $this->Html->url('/barcode', true); ?>">
				<div class="offer offer-radius offer-success">
					<div class="shape">
						<div class="shape-text">
							top
						</div>
					</div>
					<div class="offer-content">
						<h4 class="lead">
							Barcode Table Search
						</h4>
						<p>
							Click Here to Goto Search Page
							<br>
							<br>
						</p>
					</div>
				</div>
				</a>

			</div>
		</div>
	</div>
<!-- [Footer] app/View/Elements/common/footer.ctp -->
<?php echo $this->element('common/footer'); ?>

</body>
</html>