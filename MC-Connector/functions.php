<?php
require_once('engine/functions/mysql_connect.php');
require('engine\libs\xpaw\MinecraftPingException.php');
require('engine\libs\xpaw\MinecraftPing.php');
	$query = mysqlquery($connect, "x_servers", "*");
	use xPaw\MinecraftPing;
	use xPaw\MinecraftPingException;
	
	try
	{
		$res = $Query->Query();
		$online = $res["players"]["online"];
		$max = $res["players"]["max"];
		$logo = $res["favicon"];
	}
	catch( MinecraftPingException $e )
	{
		echo $e->getMessage();
	}
	finally
	{
		if( $Query )
		{
			$Query->Close();
		}
	}
	echo('<pre>');
	var_dump($res);
	echo('</pre>');

?>
