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
	<h4>Vial Table Search</h4>
	<div class='content-box-large'>

		<h4>Search Conditions</h4>
		<div class='panel-body'>
			<form class="" enctype="multipart/form-data" action="" name="form" method="post">
				<div class="col-md-4">
					<fieldset>
						<div class="form-group">
							<label>CL-No.</label>
							<input class="form-control" placeholder="CL-No." type="text" id="cl_no" name="cl_no" value="<?php echo @$request["cl_no"]; ?>">
						</div>
					</fieldset>
				</div>
				<div class="col-md-4">
					<fieldset>
						<div class="form-group">
							<label>VialID</label>
							<input class="form-control" placeholder="VialID" type="text" id="vial_id" name="vial_id" value="<?php echo @$request["vial_id"]; ?>">
						</div>
					</fieldset>
				</div>
				<div class="col-md-4" style="vertical-align:middle;">
					<fieldset>
						<div class="form-group">
							<div class="col-md-5">
								<label class="radio radio-inline">
									<input type="radio" name="andor"value="and" <?php echo $this->request->data('andor') != 'or' ? 'checked="checked"' : '' ?>>AND</label>
								<label class="radio radio-inline">
									<input type="radio" name="andor" value="or" <?php echo $this->request->data('andor') == 'or' ? 'checked="checked"' : '' ?>>OR</label>
							</div>

							<div class="form-inline" style="margin-left:auto;">
								<button class="btn btn-info" type="submit" name="search">
									<span class="glyphicon glyphicon-search"></span>&nbsp;search
								</button>
								<button class="btn btn-default" type="button" name="clear" id="clear" onClick="clearForm();">
									<span class="glyphicon glyphicon-remove"></span>&nbsp;clear&nbsp;&nbsp;&nbsp;
								</button>
								<!-- <input type="submit" name= "search" class="btn btn-primary" value="search"> -->
							</div>
						</div>
					</fieldset>
				</div>
			</form>
		</div>

	</div>
</div>

<div class='col-xs-12'>
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title">Results: <?php echo @count($data);?></div>
		</div>
		<div class="panel-body">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>CL-No.</th>
						<th>VIAL_ID</th>
						<th>CPD_WEIGHT</th>
					</tr>
				</thead>
				<tbody>
<?php
$i = 0;
if (!empty($data)) :
	foreach ($data as $dt) :
?>
				<tr class="odd gradeX">
					<td><?php echo ++$i; ?></td>
					<td><?php echo $dt['Vial']['CL_NO']; ?></td>
					<td class="center"><?php echo $dt['Vial']['VIAL_ID']; ?></td>
					<td class="center"><?php echo $dt['Vial']['CPD_WEIGHT']; ?></td>
				</tr>
<?php
	endforeach;
	endif;
?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- [Footer] app/View/Elements/common/footer.ctp -->
<?php echo $this->element('common/footer'); ?>

</body>
</html>