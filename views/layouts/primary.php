<?php

use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<?= $this->render('_html-header.php', []) ?>
<body>
<?php
$alerts = '';
foreach (['info', 'success', 'danger', 'warning'] as $type) {
    if (Yii::$app->session->hasFlash($type)) {
        $alerts .= Html::tag('div', Yii::$app->session->getFlash($type), ['class' => 'alert alert-' . $type]);
    }
}
//$this->registerJs("notice('" . $alerts . "');", View::POS_READY);

    $this->beginBody() ?>
	<div class="wrapper">

		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

			<?= $this->render('_navigation-top.php', []) ?>

			<?= $this->render('_navigation-left.php', []) ?>

		</nav>

		<?= $this->render('_content.php', ['content' => $content]) ?>

	</div>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
