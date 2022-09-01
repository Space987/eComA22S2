<?php 
namespace app\core;

class Controller{

	protected function view($name,$message=[]){
		//call in a view to display

		include('app\\views\\' . $name . '.php');
	}
}