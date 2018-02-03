<?php

/*
 * Following code will Get the data from the app and insert in the database .
*/

// array for JSON response
$response = array();

// include db connect class

require_once __DIR__ . '/Controller/users.php';

// include_once('/Api/Controller/users.php');


		$restObj = new Users();
		$result = $restObj->getAllUsers();
		if($result)
		{
			$response["data"] = array();
			foreach ($result as $rest)
			{
			array_push($response["data"], $rest);
			}
		$response["success"] = 1;
		}
		else
		{
			$response["success"] = 0;
			$response["message"] = "No Users Found";
		}

		echo json_encode($response);

?>