<?php
class PlateController extends AppController {

	public $autoLayout = false;

	public $uses = array('CombiBarcode');

	protected function _post () {
		$request = $this->request->data;
		$conditions = array();
		if ($request['cl_no'] != '') { $conditions['CombiBarcode.CL_NO like'] = '%'.$request['cl_no'].'%'; }
		if ($request['nbk_no'] != '') { $conditions['CombiBarcode.NOTE_NO like'] = '%'.$request['nbk_no'].'%'; }
		if ($request['ref_id'] != '') { $conditions['CombiBarcode.REF_ID like'] = '%'.$request['ref_id'].'%'; }
		if ($request['barcode_id'] != '') { $conditions['Barcode.BARCODE_ID like'] = '%'.$request['barcode_id'].'%'; }
		if ($request['rack_id'] != '') { $conditions['Barcode.RACK_ID like'] = '%'.$request['rack_id'].'%'; }
		if ($request['plate_id'] != '') { $conditions['Plate.PLATE_ID like'] = '%'.$request['plate_id'].'%'; }
		if ($request['well_id'] != '') { $conditions['Plate.WELL_ID like'] = '%'.$request['well_id'].'%'; }
		if ($request['vial_id'] != '') { $conditions['Vial.VIAL_ID like'] = '%'.$request['vial_id'].'%'; }

		//CombiBarcode単体の検索
		$data = $this->CombiBarcode->find('all', array(
				'conditions' => array(
						$request['andor'] => $conditions,
				)
		));
		$this->set('data', $data);
		$this->set('request', $request);

	}

	public function index () {

		// POST 通信のとき
		if ($this->request->is('post')) {
			return $this->_post();
		}

	}
	//var $scaffold;
}
?>