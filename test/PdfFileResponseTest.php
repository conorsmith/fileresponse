<?php

namespace ConorSmith\FileResponse\Test;

use ConorSmith\FileResponse\PdfFileResponse;

class PdfFileResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itSetsTheCorrectContentType()
    {
        $fileResponse = new PdfFileResponse('the-test-pdf-filename', 'the-test-pdf-content');

        $this->assertEquals(
            'application/pdf',
            $fileResponse->getResponse()->headers->get('Content-Type'),
            "The PdfFileResponse did not set the expected content type."
        );
    }
}
