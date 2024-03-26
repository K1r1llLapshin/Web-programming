<?php
function Back() {
    header("Location: /");
    exit();
}
if (false === isset($_POST["textStep1"])) Back();

setcookie("CountWords", str_word_count($_POST['textStep1']));
setcookie("CountSymbols", strlen($_POST['textStep1']));

Back();
