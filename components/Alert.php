<?php
namespace app\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class Alert extends Widget
{
	const TYPE_SUCCESS = 'success';
	const TYPE_INFO = 'info';
	const TYPE_WARNING = 'warning';
	const TYPE_DANGER = 'danger';

	public $htmlOptions=array();
	public $alerts;

	public function init()
	{
		if(empty($this->alerts))
			$this->alerts = [self::TYPE_SUCCESS, self::TYPE_INFO, self::TYPE_WARNING, self::TYPE_DANGER];
	}

	public function run()
	{
		$alerts='';
		foreach ($this->alerts as $type)
		{
			if (Yii::$app->session->hasFlash($type))
			{
				$alerts.=Html::tag('div',Yii::$app->session->getFlash($type), ['class'=>'alert alert-'.$type]);
			}
		}
		echo $alerts;
	}

	public static function save($type, $msg)
	{
		if(strpos($msg, 'Foreign key violation')!==false) $msg='Удаление невозможно. Нарушение целостности данных';
		Yii::$app->session->setFlash($type, $msg);
	}

}
