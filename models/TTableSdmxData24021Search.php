<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TableSdmxData24021;

/**
 * TTableSdmxData24021Search represents the model behind the search form of `app\models\TableSdmxData24021`.
 */
class TTableSdmxData24021Search extends TableSdmxData24021
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Code', 'god'], 'integer'],
            [['Klassifikator', 'Klassifikator_ru', 'Klassifikator_en', 'pokazatel'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TableSdmxData24021::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Code' => $this->Code,
            'god' => $this->god,
        ]);

        $query->andFilterWhere(['like', 'Klassifikator', $this->Klassifikator])
            ->andFilterWhere(['like', 'Klassifikator_ru', $this->Klassifikator_ru])
            ->andFilterWhere(['like', 'Klassifikator_en', $this->Klassifikator_en])
            ->andFilterWhere(['like', 'pokazatel', $this->pokazatel]);

        return $dataProvider;
    }
}
