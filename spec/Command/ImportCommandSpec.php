<?php

namespace spec\Command;

use Importer\Downloader;
use Importer\Extractor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImportCommandSpec extends ObjectBehavior
{
    private $downloader;
    private $extractor;

    function let(Downloader $downloader, Extractor $extractor)
    {
        $this->downloader = $downloader;
        $this->extractor = $extractor;

        $this->beConstructedWith($downloader, $extractor);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Command\ImportCommand');
    }

    function it_should_download_the_file_then_extract_it_then_import_it()
    {
        $fakeurl = 'http://www.ilikechicken.com';
        $fakepath = '/var/something';

        $this->downloader->download($fakeurl)->willReturn($fakepath);
        $this->extractor->extract($fakepath)->shouldBeCalled();

        $this->import($fakeurl);
    }
}
