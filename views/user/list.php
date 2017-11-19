<?php
use yii\grid\GridView;
use yii\helpers\Html;
\p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
$this->title = 'Все пользователи';

echo GridView::widget([
	'tableOptions' => ['class' => 'table table-responsive table-bordered'],
	'dataProvider' => $dataProvider,
	'layout' => "{items}\n{summary}\n{pager}",
    'columns' => [
        'name',
        'company',
        'position',
        'phone',
        'login',
        'email',
	    [
		    'class' => 'yii\grid\ActionColumn',
		    'template' => '{password} {update} {delete}',
		    'buttons' => [
			    'password' => function ($url, $model) {
				    return Html::a(
					    '<i class="glyphicon glyphicon-lock"></i>',
					    ['user/password','id' => $model->id],
					    [
						    'title' => 'Сменить пароль',
					    ]
				    );
			    },
		    ],
	    ],
    ],
]);



