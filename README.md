# File Response

This package wraps the `Response` object of the [Symfony HttpFoundation component](http://symfony.com/doc/current/components/http_foundation/introduction.html) for file output. The concrete classes allow you to avoid the boilerplate involved in setting up a file download response.

## Install

Via Composer

```
{
    "require": {
        "conorsmith/fileresponse": "0.1.*"
    }
}
```

## Available File Types

* PdfFileResponse (application/pdf)
* TextFileResponse (text/plain)
* ZipFileResponse (application/zip)

## Examples

```
use ConorSmith\FileResponse\TextFileResponse;

$response = new TextFileResponse('example.txt', 'This is the text file\'s contents');
$response->send();
```

```
use ConorSmith\FileResponse\ZipFileResponse;

$response = new ZipFileResponse('example.zip', file_get_contents('/path/to/example.zip'));
$response->send();
```
