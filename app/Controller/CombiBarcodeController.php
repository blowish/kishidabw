<?php
	class CombiBarcodeController extends AppController
		{
			public $autoLayout = false;

			public $uses = array('CombiBarcode');

			protected function _post () {
				$request = $this->request->data;
				$conditions = array();
				if ($request['cl_no'] != '') { $conditions['CombiBarcode.CL_NO like'] = '%'.$request['cl_no'].'%'; }
				if ($request['nbk_no'] != '') { $conditions['CombiBarcode.NOTE_NO like'] = '%'.$request['nbk_no'].'%'; }
				if ($request['ref_id'] != '') { $conditions['CombiBarcode.REF_ID like'] = '%'.$request['ref_id'].'%'; }

				//次の検索でCombiBarcodeモデルの結合を１回だけはずす。つまりCombiBarocode単体の検索となる
				$this->CombiBarcode->unbindModel(array(
						'hasOne' => array('Barcode', 'Vial', 'Plate')
				));

				$data = $this->CombiBarcode->find('all', array(
						'conditions' => array(
								$request['andor'] => $conditions
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