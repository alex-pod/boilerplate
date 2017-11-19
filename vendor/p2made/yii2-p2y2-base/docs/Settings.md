P2Y2 Base v0.1.0
=========

A base bundle for other p2y2 bundles.

Installation
------------

The preferred way to install P2Y2 Timezones is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
	composer require p2made/yii2-p2y2-base "^0.0"
```

or

```
	php composer.phar require p2made/yii2-p2y2-base "^0.0"
```

Alternatively add:

```
	"p2made/yii2-p2y2-base": "^0.0"
```

to the requires section of your `composer.json` file & P2Y2 Timezones will be installed next time you run `composer update`.

Actually, you don't need to do any of that because you're probably not going to install `yii2-p2y2-base` on its own. If you're installing any of my bundles that require `yii2-p2y2-base`, they will install it as a dependancy.


P2Y2 Timezones gives you the option of loading assets from the official CDNs. Just put this into `common/config/params.php`...

```
	'p2made' => [
		'useStatic' => true, // false or not set to use published assets
	],
```

