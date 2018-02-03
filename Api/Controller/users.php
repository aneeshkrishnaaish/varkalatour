<?php
include_once('Database.php');
class Users{
	
	function getAllUsers(){
		$db = new Database();
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		$array = array(
// 				'user_status'	      => "Y",
// 				'user_role'	      => "**"
		); 
		
		/* $result = $db->queryWithParamsArray("SELECT user_id,user_name,user_email,owner_name,restaurant_name,user_address,
				city,country,postal_code,user_phone,user_image,langitude,latitude,user_status
				from restaurant_user where user_status =:user_status AND user_role=:user_role", $array); */
		
		$result = $db->queryWithParamsArray("SELECT *FROM wp_users", $array);
		
		if($result->rowCount() > 0 )
			return $result->fetchAll();
		else
			return FALSE;
	}
}
?>