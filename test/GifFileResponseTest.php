<?php

namespace ConorSmith\FileResponse\Test;

use ConorSmith\FileResponse\GifFileResponse;

class GifFileResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itSetsTheCorrectContentType()
    {
        $fileResponse = new GifFileResponse('the-test-gif-filename', 'the-test-gif-content');

        $this->assertEquals(
            'image/gif',
            $fileResponse->getResponse()->headers->get('Content-Type'),
            "The GifFileResponse did not set the expected content type."
        );
    }
}
