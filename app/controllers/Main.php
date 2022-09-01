<?php
namespace app\controllers;

class Main extends \app\core\Controller{	

	public function index(){
		$this->view('Main/index');
	}

	public function index2(){
		$this->view('Main/index2');
	}

	 public function say($message="Default Message")
	{
		$this->view('Main/say', $message);
	}

	public function foods(){

		//TODO: refractor to place data access in a model class!

		//Run different codes when i send stuff
		if(isset($_POST['action'])){
			$foods = new \app\models\Food();
			$foods->name = $_POST['new_food'];
			$foods->insert();
		}

		// get all the foods
		$foods = new \app\models\Food();
		$foods = $foods->getAll();


		//Read a file
		//$foods = file('app/resources/foods.txt');

		//calls a view that displays the file contents
		$this->view('Main/foods', $foods);	
	}
}