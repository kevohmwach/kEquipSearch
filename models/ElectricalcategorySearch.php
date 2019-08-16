<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Electricalcategory;

/**
 * ElectricalcategorySearch represents the model behind the search form of `app\models\Electricalcategory`.
 */
class ElectricalcategorySearch extends Electricalcategory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kequip_prod_electricalsub'], 'integer'],
            [['kequip_prod_subcategory', 'kequip_prod_avatar', 'kequip_prod_description'], 'safe'],
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
        $query = Electricalcategory::find();

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
            'id_kequip_prod_electricalsub' => $this->id_kequip_prod_electricalsub,
        ]);

        $query->andFilterWhere(['like', 'kequip_prod_subcategory', $this->kequip_prod_subcategory])
            ->andFilterWhere(['like', 'kequip_prod_avatar', $this->kequip_prod_avatar])
            ->andFilterWhere(['like', 'kequip_prod_description', $this->kequip_prod_description]);

        return $dataProvider;
    }
}
