<?php
/**
 * MomentTimezoneWithDataAsset.php
 *
 * Yii2 asset for Moment Timezone
 * http://momentjs.com/timezone/
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment-timezone
 * @class \p2m\assets\MomentTimezoneWithDataAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentTimezoneWithDataAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentTimezoneWithDataAsset',
 */

namespace p2m\assets;

class MomentTimezoneWithDataAsset extends \p2m\assets\base\P2MomentAssetBase
{
	protected $version = $this->momentTimezoneVersion;

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/moment-##-version-##/builds',
			'js' => [
				'moment-timezone-with-data.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment-timezone/##-version-##',
			'js' => [
				'moment-timezone-with-data.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
