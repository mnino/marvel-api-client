<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Chadicus\Marvel\Api\Client;

$publicApiKey = getenv('PUBLIC_KEY');
$privateApiKey = getenv('PRIVATE_KEY');

$client = new Client($privateApiKey, $publicApiKey);

$character = $client->characters(1009351);

echo "{$character->getName()}\n";
echo "{$character->getDescription()}\n";

foreach ($character->getEvents()->getItems() as $event) {
    echo "\t{$event->getName()}\n";
}

