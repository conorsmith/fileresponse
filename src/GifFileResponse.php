<?php

namespace ConorSmith\FileResponse;

class GifFileResponse extends FileResponse
{
    public function __construct($filename, $contents)
    {
        parent::__construct($filename, $contents, array(
            'Content-Type' => 'image/gif'
        ));
    }
}
