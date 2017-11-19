<?php
/**
 * ThingsDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\demo\ThingsDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\demo\ThingsDemoAsset',
 */

namespace p2m\demo\assets;

class ThingsDemoAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-p2y2-things-demo/assets/lib',
			'css' => [
				'css/things-demo.css',
			],
			'js' => [],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
