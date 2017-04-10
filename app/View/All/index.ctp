<?php ?>
<!DOCTYPE html>
<html>
<head>
<title>All Table Search</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- [js and css] app/View/Elements/common/jsCss.ctp -->
<?php echo $this->element('common/jsCss'); ?>

</head>
<body>

<!-- [Header] app/View/Elements/common/header.ctp -->
<?php echo $this->element('common/header'); ?>

<div class='col-xs-12'>
	<h4>All Table Search</h4>
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
					<div class="form-group">
						<label>NBK-No.</label>
						<input class="form-control" placeholder="NBK-No." type="text" id="nbk_no" name="nbk_no" value="<?php echo @$request["nbk_no"]; ?>">
					</div>
				</fieldset>
			</div>
			<div class="col-md-4">
				<fieldset>
					<div class="form-group">
						<label>Barcode_ID</label>
						<input class="form-control" placeholder="Barcode_ID" type="text" id="barcode_id" name="barcode_id" value="<?php echo @$request["barcode_id"]; ?>">
					</div>
					<div class="form-group">
						<label>RackID</label>
						<input class="form-control" placeholder="RackID" type="text" id="rack_id" name="rack_id" value="<?php echo @$request["rack_id"]; ?>">
					</div>
					<div class="form-group">
						<label>RefID</label>
						<input class="form-control" placeholder="RefID" type="text" id="ref_id" name="ref_id" value="<?php echo @$request["ref_id"]; ?>">
					</div>
				</fieldset>
			</div>
			<div class="col-md-4">
				<fieldset>
					<div class="form-group">
						<label>PlateID</label>
						<input class="form-control" placeholder="PlateID" type="text" id="plate_id" name="plate_id" value="<?php echo @$request["plate_id"]; ?>">
					</div>
					<div class="form-group">
						<label>WellID</label>
						<input class="form-control" placeholder="WellID" type="text" id="well_id" name="well_id" value="<?php echo @$request["well_id"]; ?>">
					</div>
					<div class="form-group">
						<label>VialID</label>
						<input class="form-control" placeholder="VialID" type="text" id="vial_id" name="vial_id" value="<?php echo @$request["vial_id"]; ?>">
					</div>

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

	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title">Results: <?php echo @count($data);?></div>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>CL-No.</th>
						<th>filename</th>
						<th>NBK-No.</th>
						<th>Purity(%)</th>
						<th>RT</th>
						<th>Net(mg)</th>
						<th>Gross</th>
						<th>Vol.(ml)</th>
						<th>Conc.(mM)</th>
						<th>refID</th>
						<th>Barcode_ID</th>
						<th>RackID</th>
						<th>SEQ_NO</th>
						<th>Tare</th>
						<th>PLATE_ID</th>
						<th>WELL_ID</th>
						<th>PIPET_VOL</th>
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
					<td><?php echo $dt['CombiBarcode']['CL_NO']; ?></td>
					<td><?php echo $dt['CombiBarcode']['FILE_NAME']; ?></td>
					<td><?php echo $dt['CombiBarcode']['NOTE_NO']; ?></td>
					<td class="center"><?php echo $dt['CombiBarcode']['PURITY']; ?></td>
					<td class="center"><?php echo $dt['CombiBarcode']['RT']; ?></td>
					<td><?php echo $dt['CombiBarcode']['NET_WEIGHT']; ?></td>
					<td><?php echo $dt['CombiBarcode']['GROSS']; ?></td>
					<td><?php echo $dt['CombiBarcode']['DMSO_VOL']; ?></td>
					<td class="center"><?php echo $dt['CombiBarcode']['CONC']; ?></td>
					<td class="center"><?php echo $dt['CombiBarcode']['REF_ID']; ?></td>
					<td class="center"><?php echo $dt['Barcode']['BARCODE_ID']; ?></td>
					<td class="center"><?php echo $dt['Barcode']['RACK_ID']; ?></td>
					<td class="center"><?php echo $dt['Barcode']['SEQ_NO']; ?></td>
					<td class="center"><?php echo $dt['Barcode']['TARE']; ?></td>
					<td class="center"><?php echo $dt['Plate']['PLATE_ID']; ?></td>
					<td class="center"><?php echo $dt['Plate']['WELL_ID']; ?></td>
					<td class="center"><?php echo $dt['Plate']['PIPET_VOL']; ?></td>
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