<?php
require('src/config.php');
require('src/dbconnect.php');
	session_start();
	$_SESSION = ['username'];
	session_destroy();
	redirectLocation('index.php');