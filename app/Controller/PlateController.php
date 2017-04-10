<?php
class PlateController extends AppController {

	public $autoLayout = false;

	public $uses = array('Plate');

	protected function _post () {
		$request = $this->request->data;
		$conditions = array();
		if ($request['cl_no'] != '') { $conditions['Plate.CL_NO like'] = '%'.$request['cl_no'].'%'; }
		if ($request['plate_id'] != '') { $conditions['Plate.PLATE_ID like'] = '%'.$request['plate_id'].'%'; }
		if ($request['well_id'] != '') { $conditions['Plate.WELL_ID like'] = '%'.$request['well_id'].'%'; }

		$data = $this->Plate->find('all', array(
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