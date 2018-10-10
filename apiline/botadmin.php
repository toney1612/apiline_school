<?php
	require_once('line-bot-api/php/line-bot.php');
	include('line_db.php');

	$accessToken = "gA3AtPhOSpUt5O70t7CFSJUnZLjX902b3nGIpxIl3PtllOJqEGN3ZOuXTDADnGX/UO5fWnFXC+8ppUJNXI6iX3/HheakMKhRjpHsILeKhfGn/yQCT6Obxxt/FLGJGRE4tmTbNq02SoDbpuNjz4JiIAdB04t89/1O/w1cDnyilFU=";
	$channelSecret = "89ad9e32567163ead453bee98c89dfe2";
	$userId = "U5ba6a6ed4ed84bfa585034f83055f781";

	$bot = new BOT_API($channelSecret,$accessToken);

	$text =  new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("Hello, Edok");

	$result = getUser();
	var_dump($result);

	foreach($result as $val){
		$bot->pushMessage($val , $text);
	}


?>