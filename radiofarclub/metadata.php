<?php
// metadata.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$url = "https://radio14.plathong.net/7030/status-json.xsl";

$options = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/110.0.0.0\r\n"
    ]
];

$context = stream_context_create($options);
$response = @file_get_contents($url, false, $context);

if ($response === FALSE) {
    echo json_encode(["error" => "No se pudo conectar"]);
} else {
    echo $response;
}
?>