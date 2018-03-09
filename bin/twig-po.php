<?php

declare(strict_types=1);

namespace TranslationsFinder;

$autoloadFiles = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../autoload.php',
];

foreach ($autoloadFiles as $autoloadFile) {
    if (file_exists($autoloadFile)) {
        require_once $autoloadFile;
        break;
    }
}

use Symfony\Component\Console\Application;
use TwigPo\Console\FindTagsCommand;

$application = new Application();
$application->add(new FindTagsCommand());
$application->run();
