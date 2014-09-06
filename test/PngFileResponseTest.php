<?php

namespace ConorSmith\FileResponse\Test;

use ConorSmith\FileResponse\PngFileResponse;

class PngFileResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itSetsTheCorrectContentType()
    {
        $fileResponse = new PngFileResponse('the-test-png-filename', 'the-test-png-content');

        $this->assertEquals(
            'image/png',
            $fileResponse->getResponse()->headers->get('Content-Type'),
            "The PngFileResponse did not set the expected content type."
        );
    }
}
