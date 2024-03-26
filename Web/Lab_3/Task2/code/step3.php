<?php
session_start();
function Back() {
    header("Location: /");
    exit();
}

if (false === isset($_POST["LastName"], $_POST["Name"], $_POST["Age"], $_POST["Pets"], $_POST["Salary"])) Back();

$_SESSION["information"] = [$_POST["LastName"], $_POST["Name"], $_POST["Age"], $_POST["Pets"], $_POST["Salary"]];

echo "<ul>";
foreach ($_SESSION["information"] as $element) {
    echo "<li>{$element}</li>";
}
echo "</ul>";
