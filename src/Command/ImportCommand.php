<?php

namespace Command;

use Importer\Downloader;
use Importer\Extractor;

class ImportCommand
{
    private $downloader;

    private $extractor;

    public function __construct(Downloader $downloader, Extractor $extractor)
    {
        $this->downloader = $downloader;
        $this->extractor = $extractor;
    }

    public function import($url)
    {
        $path = $this->downloader->download($url);
        $files = $this->extractor->extract($path);
    }
}
