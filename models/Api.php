<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sdmx_data_2402__1_".
 *
 * @property int|null $Code
 * @property string|null $Klassifikator
 * @property string|null $Klassifikator_ru
 * @property string|null $Klassifikator_en
 * @property float|null $2010
 * @property float|null $2011
 * @property float|null $2012
 * @property float|null $2013
 * @property float|null $2014
 * @property float|null $2015
 * @property float|null $2016
 * @property float|null $2017
 * @property float|null $2018
 * @property float|null $2019
 * @property float|null $2020
 * @property float|null $2021
 * @property float|null $2022
 * @property string|null $2023
 */
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
    public function rules()
    {
        return [
            [['Code'], 'integer'],
            [['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'], 'number'],
            [['Klassifikator'], 'string', 'max' => 29],
            [['Klassifikator_ru'], 'string', 'max' => 25],
            [['Klassifikator_en'], 'string', 'max' => 26],
            [['2023'], 'string', 'max' => 18],
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
}
