<?php

namespace ConorSmith\FileResponse;

class JpegFileResponse extends FileResponse
{
    public function __construct($filename, $contents)
    {
        parent::__construct($filename, $contents, array(
            'Content-Type' => 'image/jpeg'
        ));
    }
}
