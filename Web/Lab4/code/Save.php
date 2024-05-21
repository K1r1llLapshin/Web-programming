<?php
require 'vendor/autoload.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);


$client = new \Google_Client();
$client->setApplicationName('LAB4');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$client->setAuthConfig('credentials.json');

$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1KMMFGWW1hI6sclnCFkDUoS7_9z4t2BNPvkPSTZDtZ_4';

if ('POST' === $_SERVER['REQUEST_METHOD'])
{
    $category = $_POST['categories'] ?? '';
    $title = $_POST['title'] ?? '';
    $email = $_POST['email'] ?? '';
    $description = $_POST['text'] ?? '';
    $data = [
        [$category, $title, $email, $description]
    ];
}

$range = 'Sheet1';

$body = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);
$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

header('Location: index.php');
exit();
?>