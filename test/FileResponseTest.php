<?php

namespace ConorSmith\FileResponse\Test;

class FileResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itSetsTheResponseCodeTo200()
    {
        $response = $this->buildFileResponseAndGetResponse();

        $this->assertEquals(
            200,
            $response->getStatusCode(),
            "The FileResponse did not set the expected status code."
        );
    }

    /**
     * @test
     */
    public function itSetsTheFilename()
    {
        $response = $this->buildFileResponseAndGetResponse();

        $this->assertRegExp(
            '/the-test-filename/',
            $response->headers->get('Content-Disposition'),
            "The FileResponse did not set the expected filename."
        );
    }

    /**
     * @test
     */
    public function itSetsTheContent()
    {
        $response = $this->buildFileResponseAndGetResponse();

        $this->assertEquals(
            'the-test-content',
            $response->getContent(),
            "The FileResponse did not set the expected content."
        );
    }

    /**
     * @test
     */
    public function itRequiresAContentTypeHeader()
    {
        $this->setExpectedException('InvalidArgumentException', "A Content-Type header must be set.");

        $fileResponse = new Helper\BasicFileResponse('the-test-filename', 'the-test-content', array());
    }

    /**
     * @test
     */
    public function itCanSetAdditionalHeaders()
    {
        $response = $this->buildFileResponseAndGetResponse(array(
            'Content-Type' => 'text/plain',
        ));

        $this->assertEquals(
            'text/plain',
            $response->headers->get('Content-Type'),
            "The FileResponse did not set the expected value for the header."
        );
    }

    /**
     * @test
     */
    public function itCanOverrideExistingHeaders()
    {
        $response = $this->buildFileResponseAndGetResponse(array(
            'Pragma' => 'a-different-cache-setting'
        ));

        $this->assertEquals(
            'a-different-cache-setting',
            $response->headers->get('Pragma'),
            "The FileResponse did not override the header with the expected value."
        );
    }

    /**
     * @test
     */
    public function itCanSendTheResponse()
    {
        ob_start();

        $fileResponse = new Helper\MinimumFileResponse('the-test-filename', 'the-test-content', array());

        $fileResponse->send();

        $responseContent = ob_get_clean();

        $this->assertEquals(
            'the-test-content',
            $responseContent,
            "The FileResponse did not send the response."
        );
    }

    /**
     * @test
     */
    public function itCanGetItsResponse()
    {
        $response = $this->buildFileResponseAndGetResponse();

        $this->assertInstanceOf(
            'Symfony\\Component\\HttpFoundation\\Response',
            $response,
            "The FileResponse did not return a Response object."
        );
    }

    protected function buildFileResponseAndGetResponse(array $additionalHeaders = null)
    {
        if (is_null($additionalHeaders)) {
            $additionalHeaders = array();
        }

        $fileResponse = new Helper\MinimumFileResponse('the-test-filename', 'the-test-content', $additionalHeaders);

        return $fileResponse->getResponse();
    }
}
