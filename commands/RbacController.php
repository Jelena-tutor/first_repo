<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 24.09.2018
 * Time: 13:57
 */


namespace app\commands;
use Yii;
use yii\console\Controller;
//Rbac generator инициализация выполняется в консоли php yii rbac/init
    class RbacController extends Controller {
        public  function actionInit(){
            $auth=Yii::$app->authManager;
            $auth->removeAll();//Удалим старые данные из базы на всякий случай

            //Создадим роли:
            $admin=$auth->createRole('admin');
            $teacher=$auth->createRole('teacher');
            $dekanat=$auth->createRole('dekanat');
            $autor=$auth->createRole('autor');

            //запишем роли в базу:
           $auth->add($admin);
            $auth->add($teacher);
            $auth->add($dekanat);
            $auth->add($autor);

            //Создадим разрешения:
            $viewAdminPage=$auth->createPermission('viewAdminPage');
            $viewAdminPage->description='Просмотр админки';
            $auth->add($viewAdminPage);

            $updateNews=$auth->createPermission('updateNews');
            $updateNews->description='Редактирование нового';
            $auth->add($updateNews);

             //Запишем эти разрешения в базу
            $auth->add($viewAdminPage);
            $auth->add($updateNews);

            //Добавим наследования. Роли "Учитель" присваиваем разрешение "Редактирование новости"
           // А админ будет наследовать от роли учитель и еще иметь свое разрешение
            $auth->addChild($admin,$teacher);
            $auth->addChild($admin,$viewAdminPage);
            //Назначаем роль admin пользователю с id 1
           $auth->assign($admin,1);
            $auth->assign($teacher,2);
      $this->stdout('Done!'.PHP_EOL);
        }



}