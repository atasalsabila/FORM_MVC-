<?php 
class FormController{
	private $model;
	private $view;
	// public function __contruct() {
	// 	$model = new FormModel();
	// 	$this->model = $model;
	// 	$view = new FormView();
	// 	$this->view = $view;
	public function setData($data) {
		$model = new FormModel();
		$this->model = $model;
		$this->model->setData ($data);
	}
	public function setFile($file) {
		$view = new FormView();
		$this->view = $view;
		$this->model->setFile ($file);
	}
	public function view() {
		$data = $this->model->getData();
		$file = $this->model->getFile();
		$fakultas = $this->model->getFakultas();
		$this->view->view($data, $file, $fakultas);
	}
}






