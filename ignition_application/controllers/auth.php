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
		$result['success'] = true;

		// read request body and decode into array
		$requestBody = json_decode(file_get_contents('php://input'),true); 

		// check that username/password exists in request
		if (array_key_exists("username", $requestBody) && array_key_exists("password", $requestBody)) {
			// clean data
			$this->load->helper('security');
			$username = trim(xss_clean($requestBody["username"]));
			$password = trim(xss_clean($requestBody["password"]));

			// send password reset email
			$this->load->model('User');
			if($this->User->login($username, $password)) {
				// success, return userID hash
				$result['userID'] = "1234"; // TODO: hash UserID
			} else {
				// failed, return error
				$result['success'] = false;
				$result['errorMessage'] = "Sorry duder, that seems to be the wrong username or password. Please try again.";
			}
		} else {
			// something has gone very wrong here
			$result['success'] = false;
			$result['errorMessage'] = "This request doesn't look right.";
		}

		// return json response
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

}