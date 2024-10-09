<?php

namespace app\modules\v1\models;

use Yii;
use yii\base\Model;






class Api extends \yii\db\ActiveRecord
{
    
 /*    public $Code;
    public $Klassifikator;
    public $Klassifikator_ru;
    public $Klassifikator_en;
    public $2010;
    public $2011;
    public $2012;
    public $2013;
    public $2014;
    public $2015;
    public $2016;
    public $2017;
    public $2018;
    public $2019;
    public $2020;
    public $2021;
    public $2022;
    public $2023; */




    public static function tableName()
    {
        return 'sdmx_data_2402__1_';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Code'], 'integer'],
            [['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'], 'number'],
            [['Klassifikator'], 'string', 'max' => 29],
            [['Klassifikator_ru'], 'string', 'max' => 25],
            [['Klassifikator_en'], 'string', 'max' => 26, ],
            [['2023'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */

    public function attributeLabels()
    {
        return [
            'Code' => 'Code',
            'Klassifikator' => 'Klassifikator',
            'Klassifikator_ru' => 'Klassifikator Ru',
            'Klassifikator_en' => 'Klassifikator En',
            '2010' => '2010',
            '2011' => '2011',
            '2012' => '2012',
            '2013' => '2013',
            '2014' => '2014',
            '2015' => '2015',
            '2016' => '2016',
            '2017' => '2017',
            '2018' => '2018',
            '2019' => '2019',
            '2020' => '2020',
            '2021' => '2021',
            '2022' => '2022',
            '2023' => '2023',
        ];
    }
   
/* 
    public function fields()
    {
        return [
           
            '2010' => 'email_address',
            
            
        ];
    } */


}
