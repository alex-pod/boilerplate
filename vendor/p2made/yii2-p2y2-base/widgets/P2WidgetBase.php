<?php
/**
 * P2WidgetBase.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-base
 * @class \p2m\base\widgets\P2WidgetBase
 */

namespace p2m\base\widgets;

use yii\bootstrap\Html;

/**
 * Use this helper with...
 *
 * use p2m\widgets\base\P2WidgetBase;
 * ...
 * echo P2WidgetBase::method([$params]);
 *
 * or
 *
 * echo \p2m\widgets\base\P2WidgetBase::method([$params]);
 */

/**
 * Base widget class for yii2-widgets
 *
 * @var public $options = [];
 * @var public $pluginOptions = [];
 * @var public $pluginEvents = [];
 * You must define events in
 * event-name => event-function format
 * for example:
 * ~~~
 * pluginEvents = [
 *     "change" => "function() { log("change"); }",
 *     "open" => "function() { log("open"); }",
 * ];
 * ~~~
 *
 * @var public $i18n = [];
 * @var protected $_msgCat = '';
 * @var protected $_pluginName;
 * @var protected $_hashVar;
 * @var protected $_dataVar;
 * @var protected $_encOptions = '';
 */
class P2WidgetBase extends \yii\bootstrap\Widget
{

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();

	}

}
