<?php
	header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
	
	ini_set('display_errors', 'On');
	
	if(isset($_POST)){
		var_dump($_POST);
	}
	else{
		var_dump($_GET);
	}

?>