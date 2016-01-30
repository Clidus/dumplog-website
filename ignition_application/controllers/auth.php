<?php

/*
|--------------------------------------------------------------------------
| Ignition ignitionpowered.co.uk
|--------------------------------------------------------------------------
|
| This class extends the functionality of Ignition. You can add your
| own custom logic here.
|
*/

require_once APPPATH.'/controllers/ignition/auth.php';

class Auth extends IG_Auth {
	
	function appLogin(){
		$result['error'] = false;

		// read request body and decode into array
		$requestBody = json_decode(file_get_contents('php://input'),true); 

		// check that username exists
		if (array_key_exists("username", $requestBody)) {
		    $result['username'] = $requestBody["username"];
		} else {
			$result['error'] = true;
		}

		// return result
        echo json_encode($result);
	}

}