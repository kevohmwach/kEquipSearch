<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Civilcategory;

/**
 * CivilcategorySearch represents the model behind the search form of `app\models\Civilcategory`.
 */
class CivilcategorySearch extends Civilcategory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kequip_prod_civilsub'], 'integer'],
            [['kequip_prod_civilsubcategory', 'kequip_prod_civilsubavatar', 'kequip_prod_civilsubdetails'], 'safe'],
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
        $query = Civilcategory::find();

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
            'id_kequip_prod_civilsub' => $this->id_kequip_prod_civilsub,
        ]);

        $query->andFilterWhere(['like', 'kequip_prod_civilsubcategory', $this->kequip_prod_civilsubcategory])
            ->andFilterWhere(['like', 'kequip_prod_civilsubavatar', $this->kequip_prod_civilsubavatar])
            ->andFilterWhere(['like', 'kequip_prod_civilsubdetails', $this->kequip_prod_civilsubdetails]);

        return $dataProvider;
    }
}
