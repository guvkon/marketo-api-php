<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

use Cra\MarketoApi\Client;
use Cra\MarketoApi\Endpoint\Asset\Program;
use Kint\Kint as K;

$config = json_decode(file_get_contents('../config.json'));
$client = (new Client($config))->authenticate();

$programEndpoint = new Program($client);
$program = $programEndpoint->queryByName('Very cool but serious program name');
K::dump($program);
$program = $programEndpoint->queryById(1990);
K::dump($program);
$programs = $programEndpoint->browse();
K::dump($programs);