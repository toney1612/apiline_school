<?php
	ini_set('display_errors',1);
	require_once('line-bot-api/php/vendor/autoload.php');
	require_once('line-bot-api/php/line-bot.php');
    
	$accessToken = "gA3AtPhOSpUt5O70t7CFSJUnZLjX902b3nGIpxIl3PtllOJqEGN3ZOuXTDADnGX/UO5fWnFXC+8ppUJNXI6iX3/HheakMKhRjpHsILeKhfGn/yQCT6Obxxt/FLGJGRE4tmTbNq02SoDbpuNjz4JiIAdB04t89/1O/w1cDnyilFU=";
	$channelSecret = "89ad9e32567163ead453bee98c89dfe2";
	$userId = "U5ba6a6ed4ed84bfa585034f83055f781";

    $bot = new BOT_API($channelSecret,$accessToken);
    $message = $bot->message->text;
    $text =  new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("Hello" . $message );
    $bot->replyMessage($bot->replyToken , $text);
    //$bot->pushMessage($userId , $text);




	/*$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($accessToken);
	$bot = new \LINE\LINEBot($httpClient,['channelSecret' => $channelSecret]);

	$message = "Hello";
	//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);

	$outputText = new TextMessageBuilder($message);

	$response = $bot->pushMessage($userId,$outputText);*/


    /*------------------------- Read profile -------------------------*/


    /*echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];*/

	/*$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($accessToken);
    //$bot = new \LINE\LINEBot($httpClient, ['channelSecret' =>  $channelSecret ]);
    //$bot2->replyMessageNew($bot2->replyToken,$bot2->text);
	//echo $bot2->replyToken
	$bot2 = new BOT_API($channelSecret,$accessToken);
    $response = $bot2->getProfile($bot2->source->userId);
    if ($response->isSucceeded()) {
    	$profile = $response->getJSONDecodedBody();
    	$displayname = $profile['displayName'];
    	$bot2->replyMessageNew($bot2->replyToken,$displayname . $bot2->replyToken);
	}*/

    /*--------------------------------------------------------------------*/




    /*----------------------- Reply with Image Profile --------------------------*/
    /*
    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($accessToken);
    //$bot = new \LINE\LINEBot($httpClient, ['channelSecret' =>  $channelSecret ]);
    //$bot2->replyMessageNew($bot2->replyToken,$bot2->text);
    //echo $bot2->replyToken
    $bot2 = new BOT_API($channelSecret,$accessToken);
    $response = $bot2->getProfile($bot2->source->userId);
    if ($response->isSucceeded()) {
        $profile = $response->getJSONDecodedBody();
        $urlFile = $profile['pictureUrl'];
        //$respone = $bot->getMessageContent($urlFile);
        $content = file_get_contents($urlFile);
        if($content){
            $output = "image_line/".$bot2->source->userId . '.jpg';
            file_put_contents($output, $content);
            echo "success!";
        }
        $image_url = "https://stigmacode.000webhostapp.com/".$output;
        $outputText = new LINE\LINEBot\MessageBuilder\ImageMessageBuilder($image_url,$image_url);
        //$bot->pushMessage($userId,$outputText)
        $bot2->replyMessage($bot2->replyToken,$outputText);
    }
    */
    /*--------------------------------------------------------------------*/






    /*---------------------- Reply text from user ------------------------*/
        /*
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($accessToken);
        $bot2 = new BOT_API($channelSecret,$accessToken);
        $bot2->replyMessageNew($bot2->replyToken,$bot2->text);
        */
    
    /*--------------------------------------------------------------------*/





    // Sticker list url 
    // https://developers.line.me/media/messaging-api/sticker_list.pdf
    /*--------------------- Send Sticker ----------------------------------*/
        /*
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($accessToken);
        $bot2 = new BOT_API($channelSecret,$accessToken);
        $sticker = new LINE\LINEBot\MessageBuilder\StickerMessageBuilder(1,6);
        $bot2->pushMessage($userId,$sticker);
        */
    /*----------------------------------------------------------------------*/





    /*$content = file_get_contents('php://input');
    $arrayJson = json_decode($content,ture);
    $replyToken = $arrayJson['events'][0]['replyToken'];
    $message = $arrayJson['events'][0]['message']['text'];
    $bot2->replyMessageNew($replyToken,$message);*/






    /*
    $message = "สวัสดีคุณ";
    $bot2-> sendMessageNew($userId,$message);
    $outputText = new LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
    $response = $bot->pushMessage($userId,$outputText);
    echo $response->getHTTPStatus();*/



    /*
    $sticker = new LINE\LINEBot\MessageBuilder\StickerMessageBuilder(1,6);
    $response = $bot->pushMessage($userId,$sticker);
    echo $response->getHTTPStatus();
	*/






	
?>