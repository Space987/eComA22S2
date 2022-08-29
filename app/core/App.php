<?php 
namespace app\core;

/* 
	Rounting all request to the appropriate controller methods
e.g.
localhost/person/add -> run the add method in the personController class

localhost/person/delete -> run the delete method in the personController class

*/

class App{

private $controller = 'Main';
private $method = 'index';

	public function __construct(){
		//echo $_GET['url'];
		// goal: to seperate the url into parts
		// use the first part to determine the calss load
		// use the second part to determine the method to run
		// while passing all other parts as arguments

		$url = self::parseUrl(); // get the url parsed and returned as an array of the URL segment

		if(isset($url[0])){
		if(file_exists('app/controllers/' . $url[0] . '.php')){
			$this->controller = $url[0]; // $this refers to the current object
		}
		unset($url[0]);
	}
	$this->controller = 'app\\controllers\\' . $this->controller;
	$this->controller = new $this->controller;
	// TODO: add class autoloading

	if(isset($url[1])){
		if(method_exists($this->controller, $url[1])){
			$this->method =$url[1];

		}

		unset($url[1]);
	}


	$params = $url ? array_values($url) : [];

	call_user_func_array([ $this->controller, $this->method  ], $params);

}

		public static function parseUrl(){
			if(isset($_GET['url'])) // get url exist
			{
				return explode('/', // return parts in an array
					filter_var( // remove non-url characters and sequences
					rtrim($_GET['url'], '/')),
					FILTER_SANITIZE_URL);
			}
		}
	}
