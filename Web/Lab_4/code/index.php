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
                <option value="Books">Books</option>
                <option value="Cars">Cars</option>
                <option value="SoftToys">SoftToys</option>
                <option value="ConstructionKit">ConstructionKit</option>
        </select>
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
        <?php
        require  __DIR__ . '/vendor/autload.php';

        error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
        $client = new \Google_Client();
        $client->setApplicationName('LAB4');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $client->setAuthConfig(__DIR__.'credentials.json');

        $service = new \Google_Service_Sheets($client);

        $spreadsheetId = '1bgWBeJ1bPM0Q78U32-m3Yq74K2rh-kYo22l62xeSm2E';
        $spreadsheet = $service->spreadsheets->get($spreadsheetId);
        $sheets = $spreadsheet->getSheets();
        foreach ($sheets as $sheet)
        {
            $sheetTitle = $sheet->getProperties()->getTitle();
            $range = $sheetTitle;

            $response = $service->spreadsheets_values->get($spreadsheetId, $range);
            $values = $response->getValues();


            if (!empty($values))
            {
                $isFirstRow = true;
                foreach ($values as $row)
                {
                    echo '<tr>';
                    foreach ($row as $cell)
                    {
                        echo '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    echo '</tr>';
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

