<?php
/**
 * FlotDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

namespace p2m\demo\assets;

class FlotDemoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-p2y2-things-demo/assets/lib';

	public $css = [
		'css/flot-demo.css',
	];

	public $depends = [
		'p2m\demo\assets\ThingsDemoAsset',
	];
}
