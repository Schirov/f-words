<?php
	define("API_KEY", "1160258916:AAHAuisaTCZlBkZc8wjgSOFPXMQvx5DDK_g");
	define("API_ENDPOINT", "https://api.telegram.org/bot" . API_KEY);
	
	// Set WebHook
	$url = API_ENDPOINT . "/setWebhook";
	$request_params = array(
		"url" => "https://" . $_SERVER['SERVER_NAME'] . "/telegram/api.php",
		"allowed_updates" => json_encode(array("message"))
	);
	file_get_contents(API_ENDPOINT . "/deleteWebhook");
	echo file_get_contents($url . "?" . http_build_query($request_params));
	echo "<br/>";
	// Set commands
	$url = API_ENDPOINT . "/setMyCommands";
	$commands = array(
		array("command" => "/stats", "description" => "Статистика"),
		array("command" => "/m", "description" => "Додати витрату"),
		array("command" => "/addreceipt", "description" => "Додати рецепт"),
		array("command" => "/setreceipt", "description" => "Змінити рецепт"),
		array("command" => "/receipt", "description" => "Інформація про рецепт"),
		array("command" => "/receipts", "description" => "Мої рецепти")
	);
	$request_params = array(
		"commands" => json_encode($commands)
	);
	echo file_get_contents($url . "?" . http_build_query($request_params));
?>