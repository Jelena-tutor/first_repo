<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 17.08.2018
 * Time: 16:31
 */
namespace app\models;
use dektrium\user\models\User;
use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{

    public static function tableName()
    {
        return 'solution';
    }

     public function  attributeLabels()
    {
        return [
            'id',
            'task_id'=>'Номер задачи',
            'studying_id'=>'',
            'solution'=>'Решение',
            'time_to_send'=>'Дата отправки решения',
           ];
    }
    public  function rules()
    {
        return [
            [['task_id','studying_id','solution'],'required'],
            [['time_to_send'],'safe']

        ];
    }
  /*  public function getUser()
    {
        return $this->hasOne(User::className(),['user_id'=>'user_id']);
    }*/

}
?>