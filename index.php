<?
date_default_timezone_set('Asia/Tashkent');
define('API_KEY', '5972169137:AAEyg2hc0oOCGUoxsHIIFw_ZeCr6DZfmT2Y');
$Manager = "293391452";


function bot($method, $datas = []){
    $url = "https://api.telegram.org/bot".API_KEY."/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    curl_close($ch);
    // if (!curl_error($ch)) return json_decode($res);
};

bot('sendmessage', [
    'chat_id' => $Manager,
    'text' => "Salom Manager !",
]);
