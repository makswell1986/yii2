<?php

namespace app\models;

use Yii;
use yii\web\Linkable;
use yii\web\Link;
use yii\helpers\Url;

/**
 * This is the model class for table "sdmx_data_275".
 *
 * @property int|null $Code
 * @property string|null $Klassifikator
 * @property string|null $Klass_ru
 * @property string|null $Klass_en
 * @property string|null $2010
 * @property string|null $2011
 * @property string|null $2012
 * @property string|null $2013
 * @property string|null $2014
 * @property string|null $2015
 * @property string|null $2016
 * @property string|null $2017
 * @property string|null $2018
 * @property string|null $2019
 * @property string|null $2020
 * @property string|null $2021
 * @property string|null $2022
 * @property string|null $2023
 */
class Api extends \yii\db\ActiveRecord implements Linkable
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sdmx_data_275';
    }

    /**
     * {@inheritdoc}
     */
    
     public function fields()
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
     public function getLinks()
     {
         return [
             Link::REL_SELF => Url::to(['api/view','code'=>$this->Clode], true),
         ];
     }

}
