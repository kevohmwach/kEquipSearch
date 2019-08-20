<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Civilitems;

/**
 * CivilitemsSearch represents the model behind the search form of `app\models\Civilitems`.
 */
class CivilitemsSearch extends Civilitems
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kequip_prod_civilitem'], 'integer'],
            [['kequip_prod_civilitem', 'kequip_prod_civilitemavatar', 'kequip_prod_civilitemdetails', 'kequip_prod_civilmanufacturer', 'kequip_prod_civildealername', 'kequip_prod_civildealerlogo', 'kequip_prod_civildealerphonecontact', 'kequip_prod_civildealeremailcontact'], 'safe'],
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
        $query = Civilitems::find();

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
            'id_kequip_prod_civilitem' => $this->id_kequip_prod_civilitem,
        ]);

        $query->andFilterWhere(['like', 'kequip_prod_civilitem', $this->kequip_prod_civilitem])
            ->andFilterWhere(['like', 'kequip_prod_civilitemavatar', $this->kequip_prod_civilitemavatar])
            ->andFilterWhere(['like', 'kequip_prod_civilitemdetails', $this->kequip_prod_civilitemdetails])
            ->andFilterWhere(['like', 'kequip_prod_civilmanufacturer', $this->kequip_prod_civilmanufacturer])
            ->andFilterWhere(['like', 'kequip_prod_civildealername', $this->kequip_prod_civildealername])
            ->andFilterWhere(['like', 'kequip_prod_civildealerlogo', $this->kequip_prod_civildealerlogo])
            ->andFilterWhere(['like', 'kequip_prod_civildealerphonecontact', $this->kequip_prod_civildealerphonecontact])
            ->andFilterWhere(['like', 'kequip_prod_civildealeremailcontact', $this->kequip_prod_civildealeremailcontact]);

        return $dataProvider;
    }
}
