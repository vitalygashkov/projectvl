<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set("allow_url_fopen", true);

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: Content-Type, Authorization, Content-Length, X-Requested-With');
header('Access-Control-Allow-Methods: GET,PUT,POST,DELETE,OPTIONS');

$params = getPayload();
// $response = doAction($params);
$response = sendMessage($params);
echo $response;

function getPayload() {
    $paramsRaw = file_get_contents('php://input');
    $params = json_decode($paramsRaw);
    if (empty($params)) {
        echo json_encode(array( 'error' => 'Empty parameters' ));
        exit();
    }
    return $params;
}

function doAction($params) {
    switch ($params->action) {
        case 'sendMessage':
            return sendMessage($params->data);
            break;
        default:
            echo json_encode(array( 'error' => 'Unknown action' ));
            exit();
            break;
    }
}

function sendMessage($data) {
	$vkGroupToken = '9c6256f911629fee03be2c1b02905adbf813daa766631d80e375af2a42bf02d7769e9eedbebf89349a1cd';
	$vkUserID     = '335729102';
	$randomID     = hexdec(uniqid());
    $message      = 'Новая заявка!'.PHP_EOL.PHP_EOL;

	if (isset($data->name) and
	    isset($data->email) and
	    isset($data->phone)) {

	    $message .= 'Имя: '.$data->name.PHP_EOL;
	    $message .= 'Почта: '.$data->email.PHP_EOL;
	    $message .= 'Телефон: '.$data->phone;
	    $response = file_get_contents("https://api.vk.com/method/messages.send?user_ids=".urlencode($vkUserID)."&message=".urlencode($message)."&random_id=".urlencode($randomID)."&access_token=".$vkGroupToken."&v=5.103");
        return $response;
	} else {
	    echo json_encode(array( 'error' => 'Incorrect message fields' ));
        exit();
	}
}
?>
