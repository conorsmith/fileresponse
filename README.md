# File Response

[![Build Status](https://travis-ci.org/conorsmith/fileresponse.svg)](https://travis-ci.org/conorsmith/fileresponse)

This package wraps the `Response` object of the [Symfony HttpFoundation component](http://symfony.com/doc/current/components/http_foundation/introduction.html) for file output. The concrete classes allow you to avoid the boilerplate involved in setting up a file download response.

## Install

Via Composer

```
{
    "require": {
        "conorsmith/fileresponse": "0.3.*"
    }
}
```

## Available File Types

* CsvFileResponse (text/csv)
* GifFileResponse (image/gif)
* JpegFileResponse (image/jpeg)
* PdfFileResponse (application/pdf)
* PngFileResponse (image/png)
* TextFileResponse (text/plain)
* ZipFileResponse (application/zip)

## Examples

```
use ConorSmith\FileResponse\TextFileResponse;

$response = new TextFileResponse('example.txt', 'This is the text file\'s contents');
$response->send();
```

You can use the abstract `FileResponse` class to create your own custom file responses.

```
use ConorSmith\FileResponse\FileResponse;

class NsfwJpegFileResponse extends FileResponse
{
    public function __construct($filename, $content)
    {
        parent::__construct($filename, $content, array(
            'Content-Type' => 'image/jpeg',
            'X-Content-NSFW' => true,
        ));
    }
}
```
