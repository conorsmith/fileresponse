<?php

namespace ConorSmith\FileResponse;

class CsvFileResponse extends FileResponse
{
    public function __construct($filename, $contents)
    {
        parent::__construct($filename, $contents, array(
            'Content-Type' => 'text/csv'
        ));
    }
}
