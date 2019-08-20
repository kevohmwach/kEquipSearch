<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kequip_prod_civilsub".
 *
 * @property int $id_kequip_prod_civilsub
 * @property string $kequip_prod_civilsubcategory
 * @property string $kequip_prod_civilsubavatar
 * @property string $kequip_prod_civilsubdetails
 */
class Civilcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kequip_prod_civilsub';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kequip_prod_civilsubcategory', 'kequip_prod_civilsubavatar', 'kequip_prod_civilsubdetails'], 'required'],
            [['kequip_prod_civilsubcategory', 'kequip_prod_civilsubavatar', 'kequip_prod_civilsubdetails'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kequip_prod_civilsub' => 'Id Kequip Prod Civilsub',
            'kequip_prod_civilsubcategory' => 'Kequip Prod Civilsubcategory',
            'kequip_prod_civilsubavatar' => 'Kequip Prod Civilsubavatar',
            'kequip_prod_civilsubdetails' => 'Kequip Prod Civilsubdetails',
        ];
    }
}
