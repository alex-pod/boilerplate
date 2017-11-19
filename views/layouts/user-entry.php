<?php

use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $content string */

//p2m\sbAdmin\assets\SBAdmin2UserAsset::register($this);
//p2m\assets\BootstrapSocialAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_html-header.php', []) ?>
</head>
<body>
<?php $this->beginBody() ?>

	<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
