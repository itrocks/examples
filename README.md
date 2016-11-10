itrocks/examples
================
The PHP Framework for small-to-big Business Applications Examples application

Examples from the https://itrocks.org/wiki can be experimented here.

## Install

```bash
git clone git@github.com:itrocks/examples itrocks-examples
php composer.phar update
mkdir cache
sudo chown www-data.www-data cache
chmod ugo+rwx .
```

Create your locale file, using your MySQL database login and name :
loc.php
```php
<?php
use ITRocks\Framework\Configuration;
use ITRocks\Framework\Configuration\Environment;
use ITRocks\Framework\Dao\Mysql\Link;

$loc = [
	Configuration::ENVIRONMENT => Environment::DEVELOPMENT,
	Link::class => [
		Link::DATABASE => 'itrocks_examples',
		Link::LOGIN    => 'itrocks_examples'
	]
];
```

Create your passwords file, set the password of your MySQL user in it :
pwd.php
```php
<?php
use ITRocks\Framework\Dao\Mysql\Link;

$pwd = [
	Link::class => 'xxxxxxxx'
];
```

Create your access script into the root of your local web-server :
/var/www/html/examples.php
```php
<?php
require 'itrocks-examples/itrocks/framework/index.php';
```

## MIT License

This program and its documentation are released into MIT License :

« Copyright © Baptiste Pillot - baptiste at pillot dot fr & B-APPLI Studio - baptiste dot pillot at bappli dot com

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions :

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

The Software is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. In no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with the software or the use or other dealings in the Software. »
