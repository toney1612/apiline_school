<?php
	require_once('line-bot-api/php/line-bot.php');
	$accessToken = "gA3AtPhOSpUt5O70t7CFSJUnZLjX902b3nGIpxIl3PtllOJqEGN3ZOuXTDADnGX/UO5fWnFXC+8ppUJNXI6iX3/HheakMKhRjpHsILeKhfGn/yQCT6Obxxt/FLGJGRE4tmTbNq02SoDbpuNjz4JiIAdB04t89/1O/w1cDnyilFU=";
	$channelSecret = "89ad9e32567163ead453bee98c89dfe2";
	$bot2 = new BOT_API($channelSecret,$accessToken);
	$userID = $_GET['userID'];
	$response = $bot2->getProfile($userID);
	if ($response->isSucceeded()) {
        $profile = $response->getJSONDecodedBody();
        $displayname = $profile['displayName'];
        echo "USER ID IS ".$userID."<br>";
        echo "NAME IS ".$displayname;
    }
?>