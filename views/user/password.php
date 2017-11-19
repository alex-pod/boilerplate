<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
\p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
$this->title='Изменение пароля';
?>

	<?php $form = ActiveForm::begin(); ?>
    <div class="col-md-6">
        <?php
        echo $model->name . '<hr>';
        echo $form->field($model, 'new_password');
        ?>
        <div class="form-group">
            <?php
            echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
            ?>
        </div>
    </div>
	<?php ActiveForm::end();?>

