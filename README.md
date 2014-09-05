# File Response

This package wraps the `Response` object of the [Symfony HttpFoundation component](http://symfony.com/doc/current/components/http_foundation/introduction.html) for file output. The concrete classes allows you to avoid the boilerplate involved in setting up a file download response.

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

* TextFileResponse (text/plain)
* ZipFileResponse (application/zip)
