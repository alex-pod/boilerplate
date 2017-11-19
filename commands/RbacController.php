<?php

namespace app\commands;

use yii;
use yii\console\Controller;

class RbacController extends Controller
{
	public function actionInit()
	{
		$auth = Yii::$app->getAuthManager();
//		$auth->removeAll();

		$user = $auth->createRole('user');
		$auth->add($user);

		$admin = $auth->createRole('admin');
		$auth->add($admin);

		/* Site Controller*/
		$dashboardSite = $auth->createPermission('dashboardSite');
		$auth->add($dashboardSite);

		/* User Controller*/
		$listUser = $auth->createPermission('listUser');
		$auth->add($listUser);

		$createUser = $auth->createPermission('createUser');
		$auth->add($createUser);

		$updateUser = $auth->createPermission('updateUser');
		$auth->add($updateUser);

		$updateOwnInfoUser = $auth->createPermission('updateOwnInfoUser');
		$auth->add($updateOwnInfoUser);

		$deleteUser = $auth->createPermission('deleteUser');
		$auth->add($deleteUser);

		$auth->addChild($user, $updateOwnInfoUser);
		$auth->addChild($admin, $listUser);
		$auth->addChild($admin, $createUser);
		$auth->addChild($admin, $updateUser);
		$auth->addChild($admin, $updateOwnInfoUser);
		$auth->addChild($admin, $deleteUser);

		$this->stdout('Done' . PHP_EOL);
	}

	public function actionTest()
	{
		echo "TEST";
	}
}