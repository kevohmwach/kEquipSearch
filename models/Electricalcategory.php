<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kequip_prod_electricalsub".
 *
 * @property int $id_kequip_prod_electricalsub
 * @property string $kequip_prod_subcategory
 * @property string $kequip_prod_avatar
 * @property string $kequip_prod_description
 */
class Electricalcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kequip_prod_electricalsub';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kequip_prod_subcategory', 'kequip_prod_avatar', 'kequip_prod_description'], 'required'],
            [['kequip_prod_subcategory', 'kequip_prod_avatar', 'kequip_prod_description'], 'string', 'max' => 255],
			//[['kequip_prod_avatar'], 'file', 'extensions'=>'jpg,png,gif', 'skipOnEmpty'=>false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kequip_prod_electricalsub' => 'Id Kequip Prod Electricalsub',
            'kequip_prod_subcategory' => 'Kequip Prod Subcategory',
            'kequip_prod_avatar' => 'Kequip Prod Avatar',
            'kequip_prod_description' => 'Kequip Prod Description',
        ];
    }
}
