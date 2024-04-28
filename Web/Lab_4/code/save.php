<?php
require 'vendor/autoload.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);


$client = new \Google_Client();
$client->setApplicationName('lab4');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__.'credentials.json');

$service = new \Google_Service_Sheets($client);

$spreadSheetId = '1bgWBeJ1bPM0Q78U32-m3Yq74K2rh-kYo22l62xeSm2E';

if ('POST' === $_SERVER['REQUEST_METHOD'])
{
    $email = $_POST['email'] ?? '';
    $title = $_POST['title'] ?? '';
    $category = $_POST['categories'] ?? '';
    $description = $_POST['text'] ?? '';

    $values = [
        [$email, $title, $category, $description]
    ];
}

$range = 'lab4';

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadSheetId, $range, $body, $params);

header('Location: index.php');
exit();