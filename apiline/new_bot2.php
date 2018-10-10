<?php
	ini_set('display_errors',1);

	//require_once('line-bot-api/php/line-bot.php');
	include('line-bot-api/php/line-bot.php');
    include('line_db.php');

    
	$accessToken = "gA3AtPhOSpUt5O70t7CFSJUnZLjX902b3nGIpxIl3PtllOJqEGN3ZOuXTDADnGX/UO5fWnFXC+8ppUJNXI6iX3/HheakMKhRjpHsILeKhfGn/yQCT6Obxxt/FLGJGRE4tmTbNq02SoDbpuNjz4JiIAdB04t89/1O/w1cDnyilFU=";
	$channelSecret = "89ad9e32567163ead453bee98c89dfe2";
	$userId = "U5ba6a6ed4ed84bfa585034f83055f781";


	// ** Text
	/*
    $bot = new BOT_API($channelSecret,$accessToken);
    $message = $bot->message->text;
    $text =  new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("Hello" . $message );
    $bot->replyMessage($bot->replyToken , $text);
    //$bot->pushMessage($userId , $text);
    */


    // ** Sticker
    // https://developers.line.me/media/messaging-api/sticker_list.pdf
    /*
    $bot = new BOT_API($channelSecret,$accessToken);
    $sticker = new LINE\LINEBot\MessageBuilder\StickerMessageBuilder(1,6);
    $bot->replyMessage($bot->replyToken , $sticker);
    */
    //$bot->pushMessage($userId,$sticker);
    $bot = new BOT_API($channelSecret,$accessToken);

    /*$action[] = new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Google','https://www.google.com');
    $action[] = new \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('Hi','Hi, Edok');
    $img_link = 'https://stigmacode.000webhostapp.com/image_line/U5ba6a6ed4ed84bfa585034f83055f781.jpg';
    $btn_templete = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder('ButtonTem.','Hi,there',$img_link,$action);
    $obj_templete = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder('Templete alt text',$btn_templete);*/


    $action[] = new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Google','https://www.google.com');
    $action[] = new \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('Hi','Hi, Edok');
    $img_link = 'https://stigmacode.000webhostapp.com/image_line/U5ba6a6ed4ed84bfa585034f83055f781.jpg';
    $btn_templete = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder('ButtonTem.','Hi,there',$img_link,$action);

    $arr[] = $btn_templete;

    $action2[] = new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Youtube','https://www.youtube.com');
    $action2[] = new \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('Hi2','Hi, Edok2');
    $img_link = 'https://stigmacode.000webhostapp.com/image_line/U5ba6a6ed4ed84bfa585034f83055f781.jpg';
    $btn_templete2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder('ButtonTem.','Hi,there',$img_link,$action2);

    $arr[] = $btn_templete2;


    $objtemplete = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($arr);

    $templetemessage = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder('Templete alt text',$objtemplete);


    $bot->pushMessage($userId,$templetemessage);

    exit;

    if($bot->isText == true){
    	$multimessage = new \LINE\LINEBot\MessageBuilder\MultiMessageBuilder();
    	$message = $bot->message->text;
    	$text =  new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("Hello" . $message );
    	$text2 =  new LINE\LINEBot\MessageBuilder\StickerMessageBuilder(1,6);
    	$multimessage->add($text);
    	$multimessage->add($text2);
    	$bot->replyMessage($bot->replyToken , $multimessage);
    }
    else if($bot->isSticker == true){
    	$sticker = new LINE\LINEBot\MessageBuilder\StickerMessageBuilder(1,6);
    	$bot->replyMessage($bot->replyToken , $sticker);
    }

    else if($bot->isLocation == true){
    	$title = $bot->message->title;
    	if(!$title){
    		$title = "Unknow Title";
    	}
    	$address = $bot->message->address;
    	$latitude = $bot->message->latitude;
    	$longitude = $bot->message->longitude;
    	$location =  new \LINE\LINEBot\MessageBuilder\LocationMessageBuilder($title,$address,$latitude,$longitude);
    	$bot->replyMessage($bot->replyToken , $location);
    }







?>