<?php
	include 'vendor/autoload.php';
	use Illuminate\Database\Capsule\Manager as Capsule;

	$capsule = new Capsule();
	$capsule->addConnection([
		"driver" => "mysql",
		"host" => "localhost",
		"database" => "tweetify",
		"username" => "tweetify_api",
		"password" => "123456",
		"charset" => "utf8",
		"collation" => "utf8_general_ci",
		"prefix" => ""

	]);

	$capsule->bootEloquent();
?>