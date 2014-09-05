<?php

namespace ConorSmith\FileResponse\Test;

use ConorSmith\FileResponse\ZipFileResponse;

class ZipFileResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itSetsTheCorrectContentType()
    {
        $fileResponse = new ZipFileResponse('the-test-zip-filename', 'the-test-zip-content');

        $this->assertEquals(
            'application/zip',
            $fileResponse->getResponse()->headers->get('Content-Type'),
            "The ZipFileResponse did not set the expected content type."
        );
    }
}
