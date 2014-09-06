<?php

namespace ConorSmith\FileResponse;

class PngFileResponse extends FileResponse
{
    public function __construct($filename, $contents)
    {
        parent::__construct($filename, $contents, array(
            'Content-Type' => 'image/png'
        ));
    }
}
