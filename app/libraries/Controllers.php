<?php 
/**
	 * Base Controller
	 * Loads the Models and Views
	 */
	class Controller
	{
		//Load Model
		function model($model)
		{	
			//Required Model File
			require_once('../app/model' . $model . '.php');
			//instatiate Model
			return new $model();
		}

		//Load View File and parameters will passed to it
		function view($view, $data = []){
			//Check For View File
			if(file_exists('../app/view/'. $view . '.php')){
				require_once('../app/view/'. $view . '.php');
			}else{
				die('View does Not Exist');
			}
		}
	}	
?>