<?php
function Back() {
    header("Location: /");
    exit();
}

if (false === isset($_POST["email"], $_POST["categories"], $_POST["title"], $_POST["text"])) Back();

$title = $_POST["title"];
$text = $_POST["text"];
$email = $_POST["email"];
$category = $_POST["categories"];

/* Подключение к серверу*/
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_error()){
    printf("Подключение к серверу MySQL невозможно, Код ошибки: %s\n", mysqli_connect_error());
    Back();
}

$mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$text', '$category')");
$mysqli->close();



Back();

