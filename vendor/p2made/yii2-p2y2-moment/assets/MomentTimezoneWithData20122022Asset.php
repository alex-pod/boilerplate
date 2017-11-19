<?php
/**
 * MomentTimezoneWithData20122022Asset.php
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
 * @class \p2m\assets\MomentTimezoneWithData20122022Asset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentTimezoneWithData20122022Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentTimezoneWithData20122022Asset',
 */

namespace p2m\assets;

class MomentTimezoneWithData20122022Asset extends \p2m\assets\base\P2MomentAssetBase
{
	protected $version = $this->momentTimezoneVersion;

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/moment-##-version-##/builds',
			'js' => [
				'moment-timezone-with-data-2012-2022.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment-timezone/##-version-##',
			'js' => [
				'moment-timezone-with-data-2012-2022.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
