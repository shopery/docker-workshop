<?php

const DB_NAME = 'test-db';
const TABLE_NAME = "test-table";

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
$numberOfQuotes = count($quotes);

$stringQuotesList = '';
foreach($quotes as $quote) {
    $stringQuotesList .= "<li>{$quote['text']} - {$quote['author']}</li>";
}

echo <<<HTML
<html>
    <head>
        <title>Quotations on Database</title>
    </head>
    <body>
        <h1>Quotations on database: $numberOfQuotes</h1>
        <p>Quotations comming from the database</p>
        <ul>
            $stringQuotesList
        </ul>
        <ul>
            <li><a href="add-quotation.php">Add another quote</a></li>
            <li><a href="mail.php">Send by email</a></li>
            <li><a href="index.php">Back to index</a></li>
        </ul>
    </body>
</html>
HTML;

