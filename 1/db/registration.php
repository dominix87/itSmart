<?php
require_once 'connection.php';

//$link = mysqli_connect($host, $user, $password, $database) or die('Ошибка подключения к базе данных');
//mysqli_character_set_name($link);
//mysqli_set_charset($link, "utf8");

# получаем все инфу с формы и пакуем массив с данными
writeToLog($_POST, 'Пришедшие данные');

function getVar($name)
{
	$name = isset($_POST[$name]) ? trim($_POST[$name]) : null;
	$name = addcslashes($name, "'");
	return $name;
}

function GetClearPhoneNumber($number) {
	if (empty($number)) {
		return "";
	}
	$number = str_replace('(', '', $number);
	$number = str_replace(')', '', $number);
	$number = str_replace('-', '', $number);
	$number = str_replace('+', '', $number);
	return $number;
}


if (empty($name)) {
	$name = getVar('name');
}

if (empty($phone)) {
	$phone = getVar('phone');
}

if (empty($email)) {
	$email = getVar('email');
}


$fullName = explode(' ', $name, 2);

$data = array(
	'first_name' => $fullName[0],
	'last_name' => (empty($fullName[1]) ? '-' : $fullName[1]),
	'phone'     => GetClearPhoneNumber($phone),
	'email'     => getVar('email'),
	'order_type' => getVar('order_type'),
	'registration_type' => getVar('registration_type'),
	'date_visited' => date("d.m.Y"),
	'time_visited' => date("G:i:s"),
	'page_url' => getVar('page_url'),
	'user_agent' => $_SERVER['HTTP_USER_AGENT'],
	'utm_source' => getVar('utm_source'),
	'utm_campaign' => getVar('utm_campaign'),
	'utm_medium' => getVar('utm_medium'),
	'utm_term' => getVar('utm_term'),
	'utm_content' => getVar('utm_content'),
	'ref' => getVar('ref'),
	'ip_address' => getVar('ip_address'),
	'city' => getVar('city'),
	'region' => getVar('region'),
	'country' => getVar('country'),
	'client_id' => getVar('client_id'),
	'utmcsr' => getVar('utmcsr'),
	'utmccn' => getVar('utmccn'),
	'utmcmd' => getVar('utmcmd'),
	'affiliate_id' => getVar('affiliate_id'),
	'click_id' => getVar('click_id')
);


// Построение SQL-оператора
$query = "INSERT INTO
        `leads_calc`(
                  `first_name`,
                  `last_name`,
                  `email`,
                  `phone`,
                  `registrationType`,
                  `orderType`,
                  `date_visited`,
                  `time_visited`,
                  `page_url`,
                  `user_agent`,
                  `utm_source`,
                  `utm_campaign`,
                  `utm_medium`,
                  `utm_term`,
                  `utm_content`,
                  `ref`,
                  `ip_address`,
                  `city`,
                  `region`,
                  `country`,
                  `client_id`,
                  `utmcsr`,
                  `utmccn`,
                  `utmcmd`,
                  `affiliate_id`,
                  `click_id`
                  ) 
        VALUES('".$data['first_name']."',
                '".$data['last_name']."',
                '".$data['email']."',
                '".$data['phone']."',
                '".$data['registration_type']."',
                '".$data['order_type']."',
                '".$data['date_visited']."',
                '".$data['time_visited']."',
                '".$data['page_url']."',
                '".$data['user_agent']."',
                '".$data['utm_source']."',
                '".$data['utm_campaign']."',
                '".$data['utm_medium']."',
                '".$data['utm_term']."',
                '".$data['utm_content']."',
                '".$data['ref']."',
                '".$data['ip_address']."',
                '".$data['city']."',
                '".$data['region']."',
                '".$data['country']."',
                '".$data['client_id']."',
                '".$data['utmcsr']."',
                '".$data['utmccn']."',
                '".$data['utmcmd']."',
                '".$data['affiliate_id']."',
                '".$data['click_id']."')";
// SQL-оператор выполняется

//mysqli_query($link, $query) or die('SQL-запрос не обработан');


// Закрытие соединения
//mysqli_close($link);
//
//require_once 'slack/hook.php';


//require_once 'mailchimp.php';
//require_once 'amo/index.php';
require_once 'mail.php';

die(json_encode([
	'status' => 'success'
]));

function writeToLog($data, $title = ''){
	$log = "\n------------------------\n";
	$log .= date("Y.m.d G:i:s") . "\n";
	$log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
	$log .= print_r($data, 1);
	$log .= "\n------------------------\n";
	file_put_contents(getcwd() . '/hookTest.log', $log, FILE_APPEND);
	return true;
}
