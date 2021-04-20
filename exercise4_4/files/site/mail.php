<?php

const DB_NAME = 'test-db';
const TABLE_NAME = "test-table";

function sendQuotesMail(array $quotes) {

    $stringQuotesList = "";

    foreach($quotes as $quote) {
        $stringQuotesList .= "<li>{$quote['text']} - {$quote['author']}</li>";
    }

    $body = <<<BODY
<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns=“https://www.w3.org/1999/xhtml”>
<head>
<title>Your daily quotes</title>
<meta http–equiv=“Content-Type” content=“text/html; charset=UTF-8” />
<meta http–equiv=“X-UA-Compatible” content=“IE=edge” />
<meta name=“viewport” content=“width=device-width, initial-scale=1.0 “ />
</head>
<body>
<h1>Your daily quotes </h1>
<ul>
$stringQuotesList
</ul>
</body>
</html>
BODY;

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $success = mail("test@shopery.com", "Your daily quotes", $body, $headers);

    if(!$success) {
        echo 'Error sending email: ' . error_get_last() . PHP_EOL;
        die();
    }
}

function getPdoConnection(): PDO
{
    try {
        $sbName = DB_NAME;

        return new PDO("mysql:dbname=$sbName;host=mysql", "root", "root");
    } catch (PDOException $e) {
        echo "Unable to open PDO connection: {$e->getMessage()}" . PHP_EOL;
        die();
    }
}

function getDatabaseQuotes(PDO $pdo): array
{
    $tableName = TABLE_NAME;
    try {
        $response = $pdo->query("SELECT * FROM `$tableName`");
    } catch (Exception $e) {
        echo "Unable get quotes from $tableName: {$e->getMessage()}" . PHP_EOL;
        die();
    }

    $quotes = [];
    foreach ($response as $row) {
        $quotes[] = [
            'text' => $row['quote'],
            'author' => $row['author'],
        ];
    }

    return $quotes;
}

$pdo = getPdoConnection();
$quotes = getDatabaseQuotes($pdo);
sendQuotesMail($quotes);
$numberOfQuotes = count($quotes);

echo <<<HTML
<html>
    <head>
        <title>Send quotes email</title>
    </head>
    <body>
        <h1>Sending email with $numberOfQuotes quotes</h1>
        <p>Email sent!</p>
        <p>Visit <a href="http://localhost:8025/">Mailhog</a> to see your received emails</p>
        <ul>
            <li><a href="add-quotation.php">Add another quote</a></li>
            <li><a href="quotes.php">View quotations</a></li>
            <li><a href="index.php">Back to index</a></li>
        </ul>
    </body>
</html>
HTML;


