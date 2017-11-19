P2Y2 Moment v2.0.0
===========

moment.js & moment-timezone.js as Yii2 assets

I've made the huge leap to version 2.0.0 because this release has assets for *all* of the moment & moment-timezone assets. That includes every locale asset, & all the variants of moment-timezone.

I've also shortened the name from `yii2-p2y2-moment-timezone` to `yii2-p2y2-moment`.

Installation
------------

The preferred way to install P2Y2 Timezones is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
	composer require p2made/yii2-p2y2-moment "^2.0"
```

or

```
	php composer.phar require p2made/yii2-p2y2-moment "^2.0"
```

Alternatively add:

```
	"p2made/yii2-p2y2-moment": "^2.0"
```

to the requires section of your `composer.json` file & P2Y2 Timezones will be installed next time you run `composer update`.

And then...
-----------

Register any of the primary assets with...

```
	p2m\assets\MomentAsset::register($this);
	p2m\assets\MomentWithLocalesAsset::register($this);
	p2m\assets\LocalesAsset::register($this);
	p2m\assets\MomentTimezoneAsset::register($this);
	p2m\assets\MomentTimezoneWithDataAsset::register($this);
	p2m\assets\MomentTimezoneWithData20122022Asset::register($this);
	p2m\assets\MomentTimezoneUtilsAsset::register($this);
```

Declare them as dependancies in other assets with...

```
	'p2m\assets\MomentAsset',
	'p2m\assets\MomentWithLocalesAsset',
	'p2m\assets\LocalesAsset',
	'p2m\assets\MomentTimezoneAsset',
	'p2m\assets\MomentTimezoneWithDataAsset',
	'p2m\assets\MomentTimezoneWithData20122022Asset',
	'p2m\assets\MomentTimezoneUtilsAsset',
```

Register any of the locale assets with...

```
	p2m\assets\locale\AfAsset::register($this);
	p2m\assets\locale\ArAsset::register($this);
	p2m\assets\locale\ArDzAsset::register($this);
	p2m\assets\locale\ArKwAsset::register($this);
	p2m\assets\locale\ArLyAsset::register($this);
	p2m\assets\locale\ArMaAsset::register($this);
	p2m\assets\locale\ArSaAsset::register($this);
	p2m\assets\locale\ArTnAsset::register($this);
	p2m\assets\locale\AzAsset::register($this);
	p2m\assets\locale\BeAsset::register($this);
	p2m\assets\locale\BgAsset::register($this);
	p2m\assets\locale\BnAsset::register($this);
	p2m\assets\locale\BoAsset::register($this);
	p2m\assets\locale\BrAsset::register($this);
	p2m\assets\locale\BsAsset::register($this);
	p2m\assets\locale\CaAsset::register($this);
	p2m\assets\locale\CsAsset::register($this);
	p2m\assets\locale\CvAsset::register($this);
	p2m\assets\locale\CyAsset::register($this);
	p2m\assets\locale\DaAsset::register($this);
	p2m\assets\locale\DeAsset::register($this);
	p2m\assets\locale\DeAtAsset::register($this);
	p2m\assets\locale\DeChAsset::register($this);
	p2m\assets\locale\DvAsset::register($this);
	p2m\assets\locale\ElAsset::register($this);
	p2m\assets\locale\EnAuAsset::register($this);
	p2m\assets\locale\EnCaAsset::register($this);
	p2m\assets\locale\EnGbAsset::register($this);
	p2m\assets\locale\EnIeAsset::register($this);
	p2m\assets\locale\EnNzAsset::register($this);
	p2m\assets\locale\EoAsset::register($this);
	p2m\assets\locale\EsAsset::register($this);
	p2m\assets\locale\EsDoAsset::register($this);
	p2m\assets\locale\EtAsset::register($this);
	p2m\assets\locale\EuAsset::register($this);
	p2m\assets\locale\FaAsset::register($this);
	p2m\assets\locale\FiAsset::register($this);
	p2m\assets\locale\FoAsset::register($this);
	p2m\assets\locale\FrAsset::register($this);
	p2m\assets\locale\FrCaAsset::register($this);
	p2m\assets\locale\FrChAsset::register($this);
	p2m\assets\locale\FyAsset::register($this);
	p2m\assets\locale\GdAsset::register($this);
	p2m\assets\locale\GlAsset::register($this);
	p2m\assets\locale\GomLatnAsset::register($this);
	p2m\assets\locale\HeAsset::register($this);
	p2m\assets\locale\HiAsset::register($this);
	p2m\assets\locale\HrAsset::register($this);
	p2m\assets\locale\HuAsset::register($this);
	p2m\assets\locale\HyAmAsset::register($this);
	p2m\assets\locale\IdAsset::register($this);
	p2m\assets\locale\IsAsset::register($this);
	p2m\assets\locale\ItAsset::register($this);
	p2m\assets\locale\JaAsset::register($this);
	p2m\assets\locale\JvAsset::register($this);
	p2m\assets\locale\KaAsset::register($this);
	p2m\assets\locale\KkAsset::register($this);
	p2m\assets\locale\KmAsset::register($this);
	p2m\assets\locale\KnAsset::register($this);
	p2m\assets\locale\KoAsset::register($this);
	p2m\assets\locale\KyAsset::register($this);
	p2m\assets\locale\LbAsset::register($this);
	p2m\assets\locale\LoAsset::register($this);
	p2m\assets\locale\LtAsset::register($this);
	p2m\assets\locale\LvAsset::register($this);
	p2m\assets\locale\MeAsset::register($this);
	p2m\assets\locale\MiAsset::register($this);
	p2m\assets\locale\MkAsset::register($this);
	p2m\assets\locale\MlAsset::register($this);
	p2m\assets\locale\MrAsset::register($this);
	p2m\assets\locale\MsAsset::register($this);
	p2m\assets\locale\MsMyAsset::register($this);
	p2m\assets\locale\MyAsset::register($this);
	p2m\assets\locale\NbAsset::register($this);
	p2m\assets\locale\NeAsset::register($this);
	p2m\assets\locale\NlAsset::register($this);
	p2m\assets\locale\NlBeAsset::register($this);
	p2m\assets\locale\NnAsset::register($this);
	p2m\assets\locale\PaInAsset::register($this);
	p2m\assets\locale\PlAsset::register($this);
	p2m\assets\locale\PtAsset::register($this);
	p2m\assets\locale\PtBrAsset::register($this);
	p2m\assets\locale\RoAsset::register($this);
	p2m\assets\locale\RuAsset::register($this);
	p2m\assets\locale\SdAsset::register($this);
	p2m\assets\locale\SeAsset::register($this);
	p2m\assets\locale\SiAsset::register($this);
	p2m\assets\locale\SkAsset::register($this);
	p2m\assets\locale\SlAsset::register($this);
	p2m\assets\locale\SqAsset::register($this);
	p2m\assets\locale\SrAsset::register($this);
	p2m\assets\locale\SrCyrlAsset::register($this);
	p2m\assets\locale\SsAsset::register($this);
	p2m\assets\locale\SvAsset::register($this);
	p2m\assets\locale\SwAsset::register($this);
	p2m\assets\locale\TaAsset::register($this);
	p2m\assets\locale\TeAsset::register($this);
	p2m\assets\locale\TetAsset::register($this);
	p2m\assets\locale\ThAsset::register($this);
	p2m\assets\locale\TlhAsset::register($this);
	p2m\assets\locale\TlPhAsset::register($this);
	p2m\assets\locale\TrAsset::register($this);
	p2m\assets\locale\TzlAsset::register($this);
	p2m\assets\locale\TzmAsset::register($this);
	p2m\assets\locale\TzmLatnAsset::register($this);
	p2m\assets\locale\UkAsset::register($this);
	p2m\assets\locale\UrAsset::register($this);
	p2m\assets\locale\UzAsset::register($this);
	p2m\assets\locale\UzLatnAsset::register($this);
	p2m\assets\locale\ViAsset::register($this);
	p2m\assets\locale\XPseudoAsset::register($this);
	p2m\assets\locale\YoAsset::register($this);
	p2m\assets\locale\ZhCnAsset::register($this);
	p2m\assets\locale\ZhTwAsset::register($this);
```

Declare them as dependancies in other assets with...

```
	'p2m\assets\locale\AfAsset',
	'p2m\assets\locale\ArAsset',
	'p2m\assets\locale\ArDzAsset',
	'p2m\assets\locale\ArKwAsset',
	'p2m\assets\locale\ArLyAsset',
	'p2m\assets\locale\ArMaAsset',
	'p2m\assets\locale\ArSaAsset',
	'p2m\assets\locale\ArTnAsset',
	'p2m\assets\locale\AzAsset',
	'p2m\assets\locale\BeAsset',
	'p2m\assets\locale\BgAsset',
	'p2m\assets\locale\BnAsset',
	'p2m\assets\locale\BoAsset',
	'p2m\assets\locale\BrAsset',
	'p2m\assets\locale\BsAsset',
	'p2m\assets\locale\CaAsset',
	'p2m\assets\locale\CsAsset',
	'p2m\assets\locale\CvAsset',
	'p2m\assets\locale\CyAsset',
	'p2m\assets\locale\DaAsset',
	'p2m\assets\locale\DeAsset',
	'p2m\assets\locale\DeAtAsset',
	'p2m\assets\locale\DeChAsset',
	'p2m\assets\locale\DvAsset',
	'p2m\assets\locale\ElAsset',
	'p2m\assets\locale\EnAuAsset',
	'p2m\assets\locale\EnCaAsset',
	'p2m\assets\locale\EnGbAsset',
	'p2m\assets\locale\EnIeAsset',
	'p2m\assets\locale\EnNzAsset',
	'p2m\assets\locale\EoAsset',
	'p2m\assets\locale\EsAsset',
	'p2m\assets\locale\EsDoAsset',
	'p2m\assets\locale\EtAsset',
	'p2m\assets\locale\EuAsset',
	'p2m\assets\locale\FaAsset',
	'p2m\assets\locale\FiAsset',
	'p2m\assets\locale\FoAsset',
	'p2m\assets\locale\FrAsset',
	'p2m\assets\locale\FrCaAsset',
	'p2m\assets\locale\FrChAsset',
	'p2m\assets\locale\FyAsset',
	'p2m\assets\locale\GdAsset',
	'p2m\assets\locale\GlAsset',
	'p2m\assets\locale\GomLatnAsset',
	'p2m\assets\locale\HeAsset',
	'p2m\assets\locale\HiAsset',
	'p2m\assets\locale\HrAsset',
	'p2m\assets\locale\HuAsset',
	'p2m\assets\locale\HyAmAsset',
	'p2m\assets\locale\IdAsset',
	'p2m\assets\locale\IsAsset',
	'p2m\assets\locale\ItAsset',
	'p2m\assets\locale\JaAsset',
	'p2m\assets\locale\JvAsset',
	'p2m\assets\locale\KaAsset',
	'p2m\assets\locale\KkAsset',
	'p2m\assets\locale\KmAsset',
	'p2m\assets\locale\KnAsset',
	'p2m\assets\locale\KoAsset',
	'p2m\assets\locale\KyAsset',
	'p2m\assets\locale\LbAsset',
	'p2m\assets\locale\LoAsset',
	'p2m\assets\locale\LtAsset',
	'p2m\assets\locale\LvAsset',
	'p2m\assets\locale\MeAsset',
	'p2m\assets\locale\MiAsset',
	'p2m\assets\locale\MkAsset',
	'p2m\assets\locale\MlAsset',
	'p2m\assets\locale\MrAsset',
	'p2m\assets\locale\MsAsset',
	'p2m\assets\locale\MsMyAsset',
	'p2m\assets\locale\MyAsset',
	'p2m\assets\locale\NbAsset',
	'p2m\assets\locale\NeAsset',
	'p2m\assets\locale\NlAsset',
	'p2m\assets\locale\NlBeAsset',
	'p2m\assets\locale\NnAsset',
	'p2m\assets\locale\PaInAsset',
	'p2m\assets\locale\PlAsset',
	'p2m\assets\locale\PtAsset',
	'p2m\assets\locale\PtBrAsset',
	'p2m\assets\locale\RoAsset',
	'p2m\assets\locale\RuAsset',
	'p2m\assets\locale\SdAsset',
	'p2m\assets\locale\SeAsset',
	'p2m\assets\locale\SiAsset',
	'p2m\assets\locale\SkAsset',
	'p2m\assets\locale\SlAsset',
	'p2m\assets\locale\SqAsset',
	'p2m\assets\locale\SrAsset',
	'p2m\assets\locale\SrCyrlAsset',
	'p2m\assets\locale\SsAsset',
	'p2m\assets\locale\SvAsset',
	'p2m\assets\locale\SwAsset',
	'p2m\assets\locale\TaAsset',
	'p2m\assets\locale\TeAsset',
	'p2m\assets\locale\TetAsset',
	'p2m\assets\locale\ThAsset',
	'p2m\assets\locale\TlhAsset',
	'p2m\assets\locale\TlPhAsset',
	'p2m\assets\locale\TrAsset',
	'p2m\assets\locale\TzlAsset',
	'p2m\assets\locale\TzmAsset',
	'p2m\assets\locale\TzmLatnAsset',
	'p2m\assets\locale\UkAsset',
	'p2m\assets\locale\UrAsset',
	'p2m\assets\locale\UzAsset',
	'p2m\assets\locale\UzLatnAsset',
	'p2m\assets\locale\ViAsset',
	'p2m\assets\locale\XPseudoAsset',
	'p2m\assets\locale\YoAsset',
	'p2m\assets\locale\ZhCnAsset',
	'p2m\assets\locale\ZhTwAsset',
```
