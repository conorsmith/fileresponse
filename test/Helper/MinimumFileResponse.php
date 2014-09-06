<?php

namespace ConorSmith\FileResponse\Test\Helper;

use ConorSmith\FileResponse\FileResponse;

class MinimumFileResponse extends FileResponse
{
    public function __construct($filename, $contents, array $additionalHeaders)
    {
        parent::__construct($filename, $contents, array_merge(array(
            'Content-Type' => 'some/content'
        ), $additionalHeaders));
    }
}
