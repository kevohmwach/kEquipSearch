<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kequip_prod_categories".
 *
 * @property int $id_kequip_prod_categories
 * @property string $kequip_prod_category
 * @property string $kequip_prod_categoryavatar
 * @property string $entirety_product_categorydetails
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kequip_prod_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kequip_prod_category', 'kequip_prod_categoryavatar', 'entirety_product_categorydetails'], 'required'],
            [['kequip_prod_category', 'kequip_prod_categoryavatar', 'entirety_product_categorydetails'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kequip_prod_categories' => 'Id Kequip Prod Categories',
            'kequip_prod_category' => 'Kequip Prod Category',
            'kequip_prod_categoryavatar' => 'Kequip Prod Categoryavatar',
            'entirety_product_categorydetails' => 'Entirety Product Categorydetails',
        ];
    }
}
