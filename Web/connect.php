<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	try
	{
		$dsn = "mysql:dbname=b11_15805407_volleyballman;host=127.0.0.1";
		$db = new PDO($dsn, 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
	}
	catch (PDOException $e) 
	{
		echo $e->getMessage();
	}
?>