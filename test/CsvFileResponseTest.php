<?php

namespace ConorSmith\FileResponse\Test;

use ConorSmith\FileResponse\CsvFileResponse;

class CsvFileResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itSetsTheCorrectContentType()
    {
        $fileResponse = new CsvFileResponse('the-test-csv-filename', 'the-test-csv-content');

        $this->assertEquals(
            'text/csv',
            $fileResponse->getResponse()->headers->get('Content-Type'),
            "The CsvFileResponse did not set the expected content type."
        );
    }
}
