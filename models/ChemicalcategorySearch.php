<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chemicalcategory;

/**
 * ChemicalcategorySearch represents the model behind the search form of `app\models\Chemicalcategory`.
 */
class ChemicalcategorySearch extends Chemicalcategory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kequip_prod_chemicalsub'], 'integer'],
            [['kequip_prod_chemicalsubcategory', 'kequip_prod_chemicalsubavatar', 'kequip_prod_chemicalsubdetails'], 'safe'],
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
        $query = Chemicalcategory::find();

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
            'id_kequip_prod_chemicalsub' => $this->id_kequip_prod_chemicalsub,
        ]);

        $query->andFilterWhere(['like', 'kequip_prod_chemicalsubcategory', $this->kequip_prod_chemicalsubcategory])
            ->andFilterWhere(['like', 'kequip_prod_chemicalsubavatar', $this->kequip_prod_chemicalsubavatar])
            ->andFilterWhere(['like', 'kequip_prod_chemicalsubdetails', $this->kequip_prod_chemicalsubdetails]);

        return $dataProvider;
    }
}
