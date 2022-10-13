<?php
	session_start();
	session_unset('name');
	header('location:index.php');
