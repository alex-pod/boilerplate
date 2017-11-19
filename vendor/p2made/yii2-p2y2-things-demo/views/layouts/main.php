<?php
/**
 * main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use p2m\widgets\Alert;
use p2m\helpers\FA;

/* @var $this \yii\web\View */
/* @var $content string */

p2m\demo\assets\ThingsDemoAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?> | P2Y2Things</title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

	<div class="wrap">
<?= $this->render('_navigation.php', []) ?>

		<div class="container">
<?= Alert::widget() ?>
<?= $content ?>
		</div>
	</div>

<?= $this->render('_footer.php', []) ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
