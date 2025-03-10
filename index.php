<?php
require 'vendor/autoload.php'; // Include Composer autoloader

use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate();

// Set source and target language
$tr->setSource('en');  // Source language: English
$tr->setTarget('fr');  // Target language: French

// Translate text
echo $tr->translate('Hello World'); // Outputs: Bonjour le monde