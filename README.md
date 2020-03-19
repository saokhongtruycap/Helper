# Package name: dien/url_helper

The url_helper package includes the following features:
- Valid 1 string is a valid url
- Connect 1 path with 1 base url. For example http://google.com/a/ connected with xyz.html to http://google.com/a/xyz.html but connected to /xyz.html to http://google.com/xyz.html
- Retrieve information: protocol, port, domain

## Install

1. On the composer.json file of the project you want to include that package, you need to add it to the line
``` sh
"require": {
"dien/url_helper": "dev-master"
}
```
2. Use the command:
``` sh
composer update;

```
to load the package into the project

3. On the index file of the project need the autoload file:
``` sh
require_once 'vendor / autoload.php';

```

3. When using, just use the correct namespace:
``` sh
require_once 'vendor / autoload.php';
use PackageUrlHelper\ UrlHelper;
$ urlHelp = new UrlHelper ();

```