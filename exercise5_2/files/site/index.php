<?php
$date = date('Y-m-d');

echo <<<HTML
<html>
    <head>
        <title>Hello world</title>
    </head>
    <body>
        <h1>Hello World, it's $date</h1>
        <ul>
            <li><a href="add-quotation.php">Add quotation</a></li>
            <li><a href="quotes.php">View quotations</a></li>
        </ul>
    </body>
</html>
HTML;
