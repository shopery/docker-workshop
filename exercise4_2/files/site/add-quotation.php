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

function createTable(PDO $pdo): void
{
    $tableName = TABLE_NAME;
    try {
        $pdo->query("SELECT 1 FROM `$tableName` LIMIT 1");
    } catch (Exception $e) {
        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Error Handling
            $sql = <<<SQL
CREATE table `$tableName`(
     `id` INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     `quote` VARCHAR( 256 ) NOT NULL,
     `author` VARCHAR( 256 ) NOT NULL
 );
SQL;
            $pdo->exec($sql);
        } catch (PDOException $e) {
            echo "Unable to create table $tableName: {$e->getMessage()}" . PHP_EOL;
            die();
        }
    }
}

function getQuote(): array
{
    $curl = curl_init();

    curl_setopt_array(
        $curl,
        [
            CURLOPT_URL => "https://type.fit/api/quotes",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [],
        ]
    );

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "Error getting quotation:" . $err . PHP_EOL;
        die();
    }

    $decodedResponse = json_decode($response, true);

    return $decodedResponse[array_rand($decodedResponse, 1)];
}

function addQuoteToDb(PDO $pdo, array $quote): void
{
    $tableName = TABLE_NAME;

    $text = $quote['text'];
    $author = $quote['author'];

    $sql = <<<SQL
INSERT INTO
`$tableName`(
    `quote`  ,
    `author`
)
VALUES
(
    "$text",
    "$author"
)
SQL;
    $pdo->exec($sql);
}

$pdo = getPdoConnection();
createTable($pdo);
$quote = getQuote();
addQuoteToDb($pdo, $quote);

echo <<<HTML
<html>
    <head>
        <title>Adding quote</title>
    </head>
    <body>
        <h1>New quotation added</h1>
        <p>{$quote['text']} - {$quote['author']}</p>
        <ul>
            <li><a href="add-quotation.php">Add another</a></li>
            <li><a href="quotes.php">View quotations</a></li>
            <li><a href="index.php">Back to index</a></li>
        </ul>
    </body>
</html>
HTML;







