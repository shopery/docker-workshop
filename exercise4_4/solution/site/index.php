<?php
$date = date('Y-m-d');

echo <<<HTML
<html>
    <head>
        <title>{$_ENV['HELLO_WORLD']}</title>
    </head>
    <body>
        <h1>{$_ENV['HELLO_WORLD']}, it's $date</h1>
        <p>Value from env variable TESTING_VAR is {$_ENV['TESTING_VAR']}</p>
        <p>Value from env variable TESTING_VAR2 is {$_ENV['TESTING_VAR2']}</p>
        <ul>
            <li><a href="add-quotation.php">Add quotation</a></li>
            <li><a href="quotes.php">View quotations</a></li>
            <li><a href="mail.php">Send by email</a></li>
        </ul>
    </body>
</html>
HTML;
