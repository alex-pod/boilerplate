<?php
/**
 * footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;

/* @var $this \yii\web\View */

?>
<footer class="footer">
	<div class="container">
		<p class="pull-left">
			Crafted with <?= FA::icon('heart') ?> by Pedro fp, on the
			<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
				Sunshine Coast <?= FA::icon(FA::_EXTERNAL_LINK) ?>
			</a> of
			<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">
				Queensland <?= FA::icon(FA::_EXTERNAL_LINK) ?>
			</a>,
			<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">
				Australia <?= FA::icon(FA::_EXTERNAL_LINK) ?>
			</a>
			<?= FA::icon('copyright') ?> <?= date('Y') ?>
		</p>

		<p class="pull-right"><?= Yii::powered() ?></p>
	</div>
</footer>
