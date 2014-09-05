<?php

namespace ConorSmith\FileResponse\Test;

use ConorSmith\FileResponse\TextFileResponse;

class TextFileResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itSetsTheCorrectContentType()
    {
        $fileResponse = new TextFileResponse('the-test-text-filename', 'the-test-text-content');

        $this->assertEquals(
            'text/plain',
            $fileResponse->getResponse()->headers->get('Content-Type'),
            "The TextFileResponse did not set the expected content type."
        );
    }
}
