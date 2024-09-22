<?php

namespace app\models;

use Yii;
use yii\web\Linkable;
use yii\web\Link;
use yii\helpers\Url;


class Api extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sdmx_data_2402__1_';
    }

    /**
     * {@inheritdoc}
     */


 /*     public function fields()
     {
        $fields = parent::fields();

        
     } */
    
     public function fieldss()
     {
        $fields = parent::fields();

      
         return [
             // название поля совпадает с именем атрибута
             'Code',
             // название поля "email", атрибут "email_address"
             'klass' => 'Klassifikator',
             // название поля "name", значение определяется callback-ом PHP
             /* 'znach' => function ($fields)  {
                 return $fields['Code']. ' ' . $fields['Klassifikator'];
             },  */
         ];
     }
/*      public function getLinks()
     {
         return [
             Link::REL_SELF => Url::to(['api/view','code'=>$this->Code], true),
         ];
     } */

}
