<?php
class BarcodeController extends AppController{

	public $autoLayout = false;

	public $uses = array('Barcode');

	protected function _post () {
		$request = $this->request->data;
		$conditions = array();
		if ($request['cl_no'] != '') { $conditions['Barcode.CL_NO like'] = '%'.$request['cl_no'].'%'; }
		if ($request['barcode_id'] != '') { $conditions['Barcode.BARCODE_ID like'] = '%'.$request['barcode_id'].'%'; }
		if ($request['rack_id'] != '') { $conditions['Barcode.RACK_ID like'] = '%'.$request['rack_id'].'%'; }

		$data = $this->Barcode->find('all', array(
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