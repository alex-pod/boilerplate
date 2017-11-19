<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php if (Yii::$app->user->isGuest) { ?>
        <p>
            You're not logged in and you can't see hidden text.
            Please <?= Html::a('Log in', ['site/login'], ['class' => 'btn-login']) ?>.
        </p>
    <?php } else { ?>
        <p>
            You're logged in, <?= Yii::$app->user->identity->username ?>,
            with ID = <?= Yii::$app->user->getId() ?>.
            This is the About page. You may modify the following file to customize its content:
            <pre>
            <?php var_dump(Yii::$app->user->identity); ?>
            </pre>
        </p>
    <?php } ?>


    <code><?= __FILE__ ?></code>
</div>
