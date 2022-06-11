<?php
http_response_code(404);

error_reporting(0);
ini_set('display_errors', 0);

/*
array (
  'app' => 'live',
  'flashver' => 'FMLE/3.0 (compatible; Larix/nul',
  'swfurl' => '',
  'tcurl' => 'rtmp://domain.tld:1935/live?authmod=adobe&user=user',
  'pageurl' => '',
  'addr' => '123.123.123.123',
  'clientid' => '2',
  'call' => 'publish',
  'name' => 'test',
  'type' => 'live',
  'passphrase' => 'topsecret'
)
*/

$allowedPassphrase = getenv("ALLOWED_PASSPHRASE");

//file_put_contents("log.txt", var_export($_POST, TRUE), FILE_APPEND);
//file_put_contents("log.txt", $allowedUser, FILE_APPEND);

if(strlen($allowedPassphrase) == 0 || $_POST['passphrase'] == $allowedPassphrase) {
  http_response_code(200);
}
?>
