<?php
class TopPageController extends AppController {

	public $autoLayout = false;

	public $uses = array('CombiBarcode');

	protected function _post () {
		$request = $this->request->data;
		$this->set('request', $request);
	}

	public function index () {

		// POST 通信のとき
		if ($this->request->is('post')) {
			return $this->_post();
		}

	}
}
?>