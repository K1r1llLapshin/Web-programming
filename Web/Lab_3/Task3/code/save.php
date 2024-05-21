<?php
function Back() {
    header("Location: /");
    exit();
}
if (false === isset($_POST["email"], $_POST["categories"], $_POST["title"], $_POST["text"])) Back();

$caregory = $_POST["categories"];
$title = $_POST["title"];
$text = $_POST["text"];
$email = $_POST["email"];

$filePath = "categories/{$caregory}/{$title}.txt";

if (false === file_put_contents($filePath, $text)) throw new Exception("Error");
chmod($filePath, 0777);
Back();

