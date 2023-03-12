<?php

$connection = new mysqli(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), getenv('MYSQL_DATABASE'));

$result = $connection->query('SELECT * FROM banner_view');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stats</title>
</head>
<body>
    <pre><?php
        while ($row = $result->fetch_assoc())
        {
            var_export($row);
        }
    ?></pre>
</body>
</html>