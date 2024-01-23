<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\Filesystem\Filesystem;


class MyLog
{
    // Ici $logFile fait référence à l'arguments du Service MyLog (voir services.yaml) symfony le charge automatiquement via l'autowiring
    function __construct(private Filesystem $fs, private LoggerInterface $logger, private string $logFile)
    {
    }


    public function writeLog(string $message)
    {

        $this->fs->mkdir('logs');
        //$this->fs->touch('logs/test.txt');
        $this->fs->appendToFile($this->logFile, $message . PHP_EOL);
        $this->logger->info("Première utilisation d'un service");
    }
}
