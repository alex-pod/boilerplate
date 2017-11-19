<?php
/**
 * MomentAsset.php
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
 * @class \p2m\assets\MomentAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentAsset',
 */

namespace p2m\assets;

class MomentAsset extends \p2m\assets\base\P2MomentAssetBase
{
	protected $version = $this->momentVersion;

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/moment-##-version-##/min',
			'js' => [
				'moment.min.js'
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment.js/##-version-##',
			'js' => [
				'moment.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
