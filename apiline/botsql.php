<?php
	require_once('line-bot-api/php/line-bot.php');
	include('line_db.php');


	$accessToken = "gA3AtPhOSpUt5O70t7CFSJUnZLjX902b3nGIpxIl3PtllOJqEGN3ZOuXTDADnGX/UO5fWnFXC+8ppUJNXI6iX3/HheakMKhRjpHsILeKhfGn/yQCT6Obxxt/FLGJGRE4tmTbNq02SoDbpuNjz4JiIAdB04t89/1O/w1cDnyilFU=";
	$channelSecret = "89ad9e32567163ead453bee98c89dfe2";
	$userId = "U5ba6a6ed4ed84bfa585034f83055f781";

	$bot2 = new BOT_API($channelSecret,$accessToken);

	if($bot2->message->text == "add"){

        $response = $bot2->getProfile($bot2->source->userId);
        if ($response->isSucceeded()) {
            $profile = $response->getJSONDecodedBody();
            $displayname = $profile['displayName'];
            insertUser($bot2->source->userId,"$displayname");
            $bot2->replyMessageNew($bot2->replyToken,"Add ! Success.");
        }
    }else if($bot2->message->text == "link"){
        $action[] = new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Link','https://stigmacode.000webhostapp.com/adminpanel.php?userID='.$bot2->source->userId);
        $action[] = new \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('Hi','Hi, Edok');
        $img_link = 'https://stigmacode.000webhostapp.com/image_line/U5ba6a6ed4ed84bfa585034f83055f781.jpg';
        $btn_templete = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder('ButtonTem.','Hi,there',$img_link,$action);
        $obj_templete = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder('Templete alt text',$btn_templete);

        $bot2->pushMessage( $bot2->source->userId , $obj_templete);
    }
?>