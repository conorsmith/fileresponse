<?php

namespace ConorSmith\FileResponse;

class ZipFileResponse extends FileResponse
{
    public function __construct($filename, $contents)
    {
        parent::__construct($filename, $contents, array(
            'Content-Type' => 'application/zip'
        ));
    }
}
