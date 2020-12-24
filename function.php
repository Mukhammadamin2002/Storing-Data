<?php 

function checkDetails($details) {
	if(empty($details))
		die('User datails are empty');
}

function checkFile($file) {
	if (!$file) {
		die("File doen't exict");
	}
}

function setDB($db_data) {
	$db_file = fopen(DB_PATH, 'r');
	$content = fwrite($db_file, json_encode($db_data, JSON_PRETTY_PRINT));
	fclose($db_file);
}

function storeUser($user_details=[]) {
	checkDetails($user_details);

	$current_content = file_get_contents(DB_PATH);

	checkFile($current_content);

	$current_db = json_decode($current_content, true);

	$current_db['user'][] = $user_details;

    setDB($current_db);	
}




?>