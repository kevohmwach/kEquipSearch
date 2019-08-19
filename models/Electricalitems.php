<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kequip_prod_electricalitems".
 *
 * @property int $id_kequip_prod_electricalitem
 * @property string $kequip_prod_item
 * @property string $kequip_prod_itemavatar
 * @property string $kequip_prod_itemdetails
 * @property string $kequip_prod_manufacturer
 * @property string $kequip_prod_dealername
 * @property string $kequip_prod_dealerlogo
 * @property string $kequip_prod_dealerphonecontact
 * @property string $kequip_prod_dealeremailcontact
 */
class Electricalitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kequip_prod_electricalitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kequip_prod_item', 'kequip_prod_itemavatar', 'kequip_prod_itemdetails', 'kequip_prod_manufacturer', 'kequip_prod_dealername', 'kequip_prod_dealerlogo', 'kequip_prod_dealerphonecontact', 'kequip_prod_dealeremailcontact'], 'required'],
            [['kequip_prod_item', 'kequip_prod_itemavatar', 'kequip_prod_itemdetails', 'kequip_prod_manufacturer'], 'string', 'max' => 255],
            [['kequip_prod_dealername', 'kequip_prod_dealerlogo'], 'string', 'max' => 100],
            [['kequip_prod_dealerphonecontact'], 'string', 'max' => 15],
            [['kequip_prod_dealeremailcontact'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kequip_prod_electricalitem' => 'Id Kequip Prod Electricalitem',
            'kequip_prod_item' => 'Kequip Prod Item',
            'kequip_prod_itemavatar' => 'Kequip Prod Itemavatar',
            'kequip_prod_itemdetails' => 'Kequip Prod Itemdetails',
            'kequip_prod_manufacturer' => 'Kequip Prod Manufacturer',
            'kequip_prod_dealername' => 'Kequip Prod Dealername',
            'kequip_prod_dealerlogo' => 'Kequip Prod Dealerlogo',
            'kequip_prod_dealerphonecontact' => 'Kequip Prod Dealerphonecontact',
            'kequip_prod_dealeremailcontact' => 'Kequip Prod Dealeremailcontact',
        ];
    }
}
