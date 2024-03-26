<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- Step 1. Working with cookie -->
    STEP 1. <br>
    <div>
        <form action="step1.php" method="post">
            <textarea name="textStep1" rows="10" cols="30" ></textarea> <br>
            <input type="submit" name="buttonStep1" value="Start"> <br>
        </form>
        <?php
        echo "Количество символов: {$_COOKIE["CountSymbols"]}<br>";
        echo "Количество слов: {$_COOKIE["CountWords"]}";
        ?>
    </div>
    <br>

<!-- Step 2-3. Working with session -->
    STEP 2. <br>
    <div>
        <form action="step2.php" method="post">
            <label for="LastName"> Your LastName: </label>
            <input type="text" name="LastName"> <br>
            <label for="Name"> Your Name: </label>
            <input type="text" name="Name"> <br>
            <label for="Age"> Your age: </label>
            <input type="text" name="Age"> <br>
            <input type="submit" name="buttonStep2" value="Start"> <br>
        </form>
    </div>
</body>
</html>
