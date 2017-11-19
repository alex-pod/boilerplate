<?php
/**
 * P2Settings.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-base
 * @class \p2m\base\helpers\P2Settings
 */

namespace p2m\base\helpers;

use Yii;

class P2Settings
{
	/**
	 * @var array | false
	 */
	private static $_p2mSettings;

	/**
	 * @var array | false
	 */
	protected static $_settingsBlock;

	/**
	 * Get p2m settings
	 * @return array | false
	 * @default false
	 */
	protected static function p2mSettings()
	{
		if(isset(self::$_p2mSettings)) {
			return self::$_p2mSettings;
		}

		return self::getSettingsItem(self::$_p2mSettings, Yii::$app->params, 'p2m');
	}

	/**
	 * Get settings block
	 * @param string $name
	 * @return array | false
	 * @default false
	 */
	protected static function getSettingsBlock($name)
	{
		return self::getSettingsItem(
			self::$_settingsBlock,
			self::p2mSettings(),
			$name, false
		);
	}

	/**
	 * Get settings item
	 * @param array | false $source
	 * @param object &$target
	 * @param string $name
	 * @param object $default
	 * @return object | false
	 * @default false
	 */
	protected static function getSettingsItem(&$target, $source, $name = '', $default = false)
	{
		/**
		 * if $target is already set,
		 * return it unchanged
		 */
		if(isset($target)) {
			return $target;
		}

		$useSource = true;

		/**
		 * if $source is false,
		 * or $source[$name] is not set,
		 * set $useSource false
		 */
		if($source === false || !isset($source[$name])) {
			$useSource = false;
		}

		$target = ($useSource ? $source[$name] : $default);
		return $target;
	}
}
