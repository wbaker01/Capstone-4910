<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('24af1cb172466776968f03045b74907a35680e80b4265cd827b6a44a82b68a36b13c90e50c6e3206c4d4bec058ef370e26e54d1efb9d103bdd03487026bf7d2f');

$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = $_POST['deleteFile']; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $apiInstance->deleteScore($score);
    $rows = file("song_data.txt");
    $blacklist = $score;
    foreach($rows as $key => $row) {
        if(preg_match("/($blacklist)/", $row)) {
            unset($rows[$key]);
        }
    }

    file_put_contents("song_data.txt", implode("\n", $rows));


} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->deleteScore: ', $e->getMessage(), PHP_EOL;
}
?>
