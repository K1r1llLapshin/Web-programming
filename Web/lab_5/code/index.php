<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WB</title>
    <link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
    <div id="form">
        <form method="post" action="save.php">
            <label for="email" >Email</label>
            <input type="email" name="email" required>
            <label for="categories">Category</label>
            <select name="categories" required>
                <option value="Books" >Books</option>
                <option value="Cars" >Cars</option>
                <option value="ConstructionKit" >ConstructionKit</option>
                <option value="SoftToys" >SoftToys</option>
            </select> <br>
            <label for="title" >Title</label>
            <input type="text" name="title" required> <br>
            <label for="text" >Text</label>
            <textarea rows="5" name="text"></textarea> <br>
            <input type="submit" value="Save">

        </form>
    </div>
    <div id="table">
        <table>
            <thead>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>
</html>
