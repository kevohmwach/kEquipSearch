<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Electricalitems;

/**
 * ElectricalitemsSearch represents the model behind the search form of `app\models\Electricalitems`.
 */
class ElectricalitemsSearch extends Electricalitems
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kequip_prod_electricalitem'], 'integer'],
            [['kequip_prod_item', 'kequip_prod_itemavatar', 'kequip_prod_itemdetails', 'kequip_prod_manufacturer', 'kequip_prod_dealername', 'kequip_prod_dealerlogo', 'kequip_prod_dealerphonecontact', 'kequip_prod_dealeremailcontact'], 'safe'],
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
        $query = Electricalitems::find();

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
            'id_kequip_prod_electricalitem' => $this->id_kequip_prod_electricalitem,
        ]);

        $query->andFilterWhere(['like', 'kequip_prod_item', $this->kequip_prod_item])
            ->andFilterWhere(['like', 'kequip_prod_itemavatar', $this->kequip_prod_itemavatar])
            ->andFilterWhere(['like', 'kequip_prod_itemdetails', $this->kequip_prod_itemdetails])
            ->andFilterWhere(['like', 'kequip_prod_manufacturer', $this->kequip_prod_manufacturer])
            ->andFilterWhere(['like', 'kequip_prod_dealername', $this->kequip_prod_dealername])
            ->andFilterWhere(['like', 'kequip_prod_dealerlogo', $this->kequip_prod_dealerlogo])
            ->andFilterWhere(['like', 'kequip_prod_dealerphonecontact', $this->kequip_prod_dealerphonecontact])
            ->andFilterWhere(['like', 'kequip_prod_dealeremailcontact', $this->kequip_prod_dealeremailcontact]);

        return $dataProvider;
    }
}
