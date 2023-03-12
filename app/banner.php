<?php

error_reporting(E_ALL);

$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$pageUrl = parse_url($_SERVER['HTTP_REFERER'] ?? '',  PHP_URL_PATH);
if (!is_string($pageUrl) || empty($pageUrl))
{
    $pageUrl = '/index.html';
}

$connection = new mysqli(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), getenv('MYSQL_DATABASE'));
$statement = $connection->prepare(
    'INSERT INTO banner_view
        (ip_address, user_agent, page_url)
    VALUES
        (?, ?, ?)
    ON DUPLICATE KEY UPDATE
        view_date = NOW(),
        views_count = views_count + 1
    ;'
);
$statement->bind_param('sss', $ip, $userAgent, $pageUrl);
$statement->execute();

$mimeType = getimagesize('sunset.jpg')['mime'] ?? 'image/jpeg';
header("Content-Type: {$mimeType}");
readfile('sunset.jpg');