<?php

namespace ConorSmith\FileResponse;

class PdfFileResponse extends FileResponse
{
    public function __construct($filename, $content)
    {
        parent::__construct($filename, $content, array(
            'Content-Type' => 'application/pdf',
        ));
    }
}
