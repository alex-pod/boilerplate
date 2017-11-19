<?php
/**
 * P2MomentAssetBase.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment-timezone
 * @class \p2m\assets\base\P2MomentAssetBase
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

namespace p2m\assets\base;

class P2MomentAssetBase extends \p2m\base\assets\P2AssetBase
{
	/*
	 * @var string
	 * protected $version;
	 */

	/*
	 * @var string
	 * protected $_p2mProjectId;
	 */
	protected $_p2mProjectId = 'yii2-p2y2-moment-timezone';

	protected $momentVersion = '2.18.1';
	protected $momentTimezoneVersion = '0.5.13';


	/**
	 * @var string
	 * public $sourcePath;
	 *
	 * @var string
	 * public $baseUrl;
	 *
	 * @var array
	 * public $css = [];
	 *
	 * @var array
	 * public $cssOptions = [];
	 *
	 * @var array
	 * public $js = [];
	 *
	 * @var array
	 * public $jsOptions = [];
	 *
	 * @var array
	 * public $depends = [];
	 *
	 * @var array
	 * public $publishOptions = [];
	 *
	 * @var boolean
	 * public $_useStatic = false;
	 *
	 * @var array | false
	 * public $_staticEnd = [] | false;
	 */
}
