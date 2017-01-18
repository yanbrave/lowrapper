<?php

require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




// Example start

use Mnvx\Lowrapper\Converter;
use Mnvx\Lowrapper\LowrapperParameters;
use Mnvx\Lowrapper\Format;

$converter = new Converter();
$parameters = (new LowrapperParameters())
    ->setInputFile(__DIR__ . '/data/docx.docx')
    ->setOutputFile(__DIR__ . '/output/docx-to-html.html')
    ->setOutputFormat(Format::WEB_HTML);

$converter->convert($parameters);

// Example finish


include __DIR__ . '/output/docx-to-html.html';