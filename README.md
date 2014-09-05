# File Response

This package wraps the `Response` object of the Symfony HttpFoundation component for file output. The concrete classes allows you to avoid the boilerplate involved in setting up a file download response.

## Install

Via Composer

```
{
    "require": {
        "conorsmith/fileresponse": "*"
    }
}
```

## Available File Types

* TextFileResponse (text/plain)
* ZipFileResponse (application/zip)
