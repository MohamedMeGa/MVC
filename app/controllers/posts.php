<?php 
class Posts extends Controller{
	public function __construct(){
		echo "string";
	}

	public function index(){
		$this->view('Hello');
	}

	public function about($id){
		echo $id;
	}
}
?>