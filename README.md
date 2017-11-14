XMLRPC-NG for PHP
=================

A php library for building xmlrpc clients and servers.

This is the grand-son of the venerable PHP-XMLRPC library.

It is designed for the modern world, while retaining the same feature set an API "similar" to the original one.
Specifically, it:
- is based on PSR-7 and HTTPlug for handling the HTTP communication;
- uses immutable objects for the Client, Request and Response;
- has a modular design that allows sister libraries to be used not only for JSONRPC calls, but for SOAP as well as other protocols;
- is only installable via Composer.
- The visual Debugger has also been split off into a separate package, to avoid having installed it on Production environments if not required

The plan for the next major version of the PHP-XMLRPC library is to be rebase it as a compatibility shim on top of this package.

License
-------
Use of this software is subject to the terms in the [license.txt](license.txt) file
