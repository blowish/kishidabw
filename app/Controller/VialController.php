<?php
class VialController extends AppController {

	public $autoLayout = false;

	public $uses = array('Vial');

	protected function _post () {
		$request = $this->request->data;
		$conditions = array();
		if ($request['cl_no'] != '') { $conditions['Vial.CL_NO like'] = '%'.$request['cl_no'].'%'; }
		if ($request['vial_id'] != '') { $conditions['Vial.VIAL_ID like'] = '%'.$request['vial_id'].'%'; }

		//CombiBarcode単体の検索
		$data = $this->Vial->find('all', array(
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