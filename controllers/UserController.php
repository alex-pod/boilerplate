<?php
namespace app\controllers;

use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\components\Alert;

class UserController extends Controller {

	/**
	 * @return array
	 */
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => ['list', 'create', 'update', 'delete', 'password'],
						'allow' => true,
						'roles' => ['admin'],
					],
					[
						'actions' => ['update-own-info'],
						'allow' => true,
						'roles' => ['admin', 'user'],
					],
				],
			],
		];
	}

	/**
	 * @return string
	 */
	public function actionList()
	{
		$query = User::find()->orderBy('id');

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => [
				'pageSize' => 20,
			],
			'sort' => false,
		]);

		return $this->render('list', [
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * @param $model
	 * @param $new
	 *
	 * @return string|\yii\web\Response
	 */
	private function _edit($model, $new)
	{
		if ($model->load($post=Yii::$app->request->post())) {
			if ($new) {
				$model->password_hash = Yii::$app->security->generatePasswordHash($model->password);
				$model->auth_key = Yii::$app->security->generateRandomString();
			}
			if ($model->save())
			{
				if ($new) {
					$auth = Yii::$app->getAuthManager();
					$userRole = $auth->getRole('user');
					$auth->assign($userRole, $model->getId());
				}

				Alert::save('success', ' Запись сохранена');
			}
		}
		return $this->render('form', ['model' => $model]);
	}

	/**
	 * @return string|\yii\web\Response
	 */
	public function actionCreate()
	{
		$model = new User();
		$model->scenario = 'register';
		return $this->_edit($model, true);
	}

	/**
	 * @param $id
	 *
	 * @return string|\yii\web\Response
	 * @throws NotFoundHttpException
	 */
	public function actionUpdate($id)
	{
		if (!$model = User::findOne((int)$id))
			throw new NotFoundHttpException();
		return $this->_edit($model,false);
	}

	/**
	 * @return string|\yii\web\Response
	 */
	public function actionUpdateOwnInfo()
	{
		$model = Yii::$app->user->identity;
		return $this->_edit($model,false);
	}

	/**
	 * @param $id
	 *
	 * @return \yii\web\Response
	 * @throws NotFoundHttpException
	 */
	public function actionDelete($id)
	{
		if (!$model = User::findOne((int)$id))
			throw new NotFoundHttpException();

		try {
			if ($model->delete());
		}  catch (Exception $e) {
			$msg = $e->getMessage();
			Alert::save('danger', $msg);
		}
		Alert::save('success', ' Запись удалена');
		return $this->redirect(['/user/list']);
	}

	/**
	 * @param $id
	 *
	 * @return string|\yii\web\Response
	 * @throws NotFoundHttpException
	 */
	public function actionPassword($id)
	{
		if(!$model = User::findOne((int)$id))
			throw new NotFoundHttpException();

		$model->scenario = 'password';
		if ($model->load(Yii::$app->request->post())) {
			if (!empty($model->new_password)) {
				$model->password_hash=Yii::$app->security->generatePasswordHash($model->new_password);
				$model->auth_key=Yii::$app->security->generateRandomString();
			}
			if ($model->save())
				Alert::save('success','Пароль изменён');
			return $this->redirect(['/user/list']);
		}
		return $this->render('password', [
			'model' => $model,
		]);
	}
}