<?php 
namespace app\core;

class App{
	public function __construct(){
		echo $_GET['url'];
	}
}