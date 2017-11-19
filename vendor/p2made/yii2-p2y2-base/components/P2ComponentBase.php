<?php
/**
 * P2ComponentBase.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-base
 * @class \p2m\base\components\P2ComponentBase
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

namespace p2m\base\components;

use yii\bootstrap\Html;

/**
 * Use this helper with...
 *
 * use p2m\components\base\P2ComponentBase;
 * ...
 * echo P2ComponentBase::method([$params]);
 *
 * or
 *
 * echo \p2m\components\base\P2ComponentBase::method([$params]);
 */
class P2ComponentBase
{

	/** @var string */
	public static $defaultTag;

	/** @var string */
	protected $tag;

	/** @var mixed */
	protected $content = null;

	/** @var array */
	protected $options = [];

	/**
	 * @param array $options
	 */
	public function __construct($options = [])
	{
		// Html::addCssClass($options, 'classes');

		$this->options = $options;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->render();
	}


	/**
	 * Change html tag.
	 * @param string $tag
	 * @return self
	 */
	public function tag($tag)
	{
		$this->tag = $tag;

		return $this;
	}

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \rmrevin\yii\fontawesome\component\Icon
	 * @throws \yii\base\InvalidConfigException
	 * @codeCoverageIgnore
	 */
	public function addCssClass($class, $condition = true, $throw = false)
	{
		if ($condition === false) {
			if (!empty($throw)) {
				$message = !is_string($throw)
					? 'Condition is false'
					: $throw;

				throw new \yii\base\InvalidConfigException($message);
			}
		} else {
			Html::addCssClass($this->options, $class);
		}

		return $this;
	}

	/**
	 * @param string|null $tag
	 * @param string|null $content
	 * @param array $options
	 * @return string
	 */
	public function render($tag = null, $content = null, $options = [])
	{
		$tag = empty($tag)
		? (empty($this->tag) ? static::$defaultTag : $this->tag)
		: $tag;

		$options = array_merge($this->options, $options);

		return Html::tag($tag, $content, $options);
	}

}

