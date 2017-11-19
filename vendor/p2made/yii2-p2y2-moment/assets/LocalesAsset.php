<?php
/**
 * LocalesAsset.php
 *
 * Yii2 asset for Moment
 * http://momentjs.com
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment-timezone
 * @class \p2m\assets\LocalesAsset
 */

/**
 * Load this asset with...
 * p2m\assets\LocalesAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\LocalesAsset',
 */

namespace p2m\assets;

class LocalesAsset extends \p2m\assets\base\P2MomentAssetBase
{
	protected $version = $this->momentVersion;

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/moment-##-version-##/min',
			'js' => [
				'locales.min.js'
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
