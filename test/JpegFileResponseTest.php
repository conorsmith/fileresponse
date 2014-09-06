<?php

namespace ConorSmith\FileResponse\Test;

use ConorSmith\FileResponse\JpegFileResponse;

class JpegFileResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itSetsTheCorrectContentType()
    {
        $fileResponse = new JpegFileResponse('the-test-jpeg-filename', 'the-test-jpeg-content');

        $this->assertEquals(
            'image/jpeg',
            $fileResponse->getResponse()->headers->get('Content-Type'),
            "The JpegFileResponse did not set the expected content type."
        );
    }
}
