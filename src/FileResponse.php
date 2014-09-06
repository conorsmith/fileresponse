<?php

namespace ConorSmith\FileResponse;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

abstract class FileResponse
{
    protected $response;

    public function __construct($filename, $contents, array $additionalHeaders)
    {
        if ( ! array_key_exists('Content-Type', $additionalHeaders)) {
            throw new \InvalidArgumentException("A Content-Type header must be set.");
        }

        $this->response = new Response(
            $contents,
            Response::HTTP_OK,
            array_merge(array(
                'Pragma' => 'no-cache',
                'Expires' => 0,
            ), $additionalHeaders)
        );

        $disposition = $this->response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );

        $this->response->headers->set('Content-Disposition', $disposition);
    }

    public function send()
    {
        $this->response->send();
    }

    public function getResponse()
    {
        return $this->response;
    }
}
