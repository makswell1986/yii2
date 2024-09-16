<?php

namespace app\models\api;

use Yii;

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
class SdmxData275 extends \yii\db\ActiveRecord
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
    public function rules()
    {
        return [
            [['Code'], 'integer'],
            [['Klassifikator'], 'string', 'max' => 29],
            [['Klass_ru'], 'string', 'max' => 25],
            [['Klass_en'], 'string', 'max' => 26],
            [['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'], 'string', 'max' => 15],
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
            'Klass_ru' => 'Klass Ru',
            'Klass_en' => 'Klass En',
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
