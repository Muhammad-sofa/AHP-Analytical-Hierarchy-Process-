<?php

$mysqli = new mysqli('localhost', 'root', '123', 'ahpca');
if ($mysqli->connect_errno) {
	echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
	exit();
}
