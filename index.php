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
)
*/

$allowedUser = getenv("ALLOWED_USER");

file_put_contents("log.txt", $allowedUser, FILE_APPEND);

if(strlen($allowedUser) != 0 && end(explode('=', $_POST["tcurl"])) == $allowedUser) {
  http_response_code(200);
}
?>
