<?php
class CombiBarcode extends AppModel {

	public $useTable = 'combi_barcode';
	var $primaryKey = 'CL_NO';
	public $hasOne = array(
			'Barcode' => array(
					'className' => 'barcode',
					'foreignKey' => 'CL_NO',
					'dependent' => true
			),
			'Vial' => array(
					'className' => 'vial',
					'foreignKey' => 'CL_NO',
					'dependent' => true
			),
			'Plate' => array(
					'className' => 'plate',
					'foreignKey' => 'CL_NO',
					'dependent' => true
			)
	);

}
?>
