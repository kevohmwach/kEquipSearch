<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chemicalitems;

/**
 * ChemicalitemsSearch represents the model behind the search form of `app\models\Chemicalitems`.
 */
class ChemicalitemsSearch extends Chemicalitems
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kequip_prod_chemicalitem'], 'integer'],
            [['kequip_prod_chemicalitem', 'kequip_prod_chemicalitemavatar', 'kequip_prod_chemicalitemdetails', 'kequip_prod_chemicalmanufacturer', 'kequip_prod_chemicaldealername', 'kequip_prod_chemicaldealerlogo', 'kequip_prod_chemicaldealerphonecontact', 'kequip_prod_chemicaldealeremailcontact'], 'safe'],
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
        $query = Chemicalitems::find();

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
            'id_kequip_prod_chemicalitem' => $this->id_kequip_prod_chemicalitem,
        ]);

        $query->andFilterWhere(['like', 'kequip_prod_chemicalitem', $this->kequip_prod_chemicalitem])
            ->andFilterWhere(['like', 'kequip_prod_chemicalitemavatar', $this->kequip_prod_chemicalitemavatar])
            ->andFilterWhere(['like', 'kequip_prod_chemicalitemdetails', $this->kequip_prod_chemicalitemdetails])
            ->andFilterWhere(['like', 'kequip_prod_chemicalmanufacturer', $this->kequip_prod_chemicalmanufacturer])
            ->andFilterWhere(['like', 'kequip_prod_chemicaldealername', $this->kequip_prod_chemicaldealername])
            ->andFilterWhere(['like', 'kequip_prod_chemicaldealerlogo', $this->kequip_prod_chemicaldealerlogo])
            ->andFilterWhere(['like', 'kequip_prod_chemicaldealerphonecontact', $this->kequip_prod_chemicaldealerphonecontact])
            ->andFilterWhere(['like', 'kequip_prod_chemicaldealeremailcontact', $this->kequip_prod_chemicaldealeremailcontact]);

        return $dataProvider;
    }
}
