<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kequip_prod_chemicalsub".
 *
 * @property int $id_kequip_prod_chemicalsub
 * @property string $kequip_prod_chemicalsubcategory
 * @property string $kequip_prod_chemicalsubavatar
 * @property string $kequip_prod_chemicalsubdetails
 */
class Chemicalcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kequip_prod_chemicalsub';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kequip_prod_chemicalsubcategory', 'kequip_prod_chemicalsubavatar', 'kequip_prod_chemicalsubdetails'], 'required'],
            [['kequip_prod_chemicalsubcategory', 'kequip_prod_chemicalsubavatar', 'kequip_prod_chemicalsubdetails'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kequip_prod_chemicalsub' => 'Id Kequip Prod Chemicalsub',
            'kequip_prod_chemicalsubcategory' => 'Kequip Prod Chemicalsubcategory',
            'kequip_prod_chemicalsubavatar' => 'Kequip Prod Chemicalsubavatar',
            'kequip_prod_chemicalsubdetails' => 'Kequip Prod Chemicalsubdetails',
        ];
    }
}
