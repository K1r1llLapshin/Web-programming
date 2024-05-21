<?php
session_start();
function Back() {
    header("Location: /");
    exit();
}

if (false === isset($_POST["LastName"], $_POST["Name"], $_POST["Age"])) Back();

$_SESSION["LastName"] = $_POST["LastName"];
$_SESSION["Name"] = $_POST["Name"];
$_SESSION["Age"] = $_POST["Age"];

echo "Вас зовут {$_SESSION["LastName"]} {$_SESSION["Name"]}. Вам {$_SESSION["Age"]} лет(года)<br>";
