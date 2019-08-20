<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kequip_prod_chemicalitems".
 *
 * @property int $id_kequip_prod_chemicalitem
 * @property string $kequip_prod_chemicalitem
 * @property string $kequip_prod_chemicalitemavatar
 * @property string $kequip_prod_chemicalitemdetails
 * @property string $kequip_prod_chemicalmanufacturer
 * @property string $kequip_prod_chemicaldealername
 * @property string $kequip_prod_chemicaldealerlogo
 * @property string $kequip_prod_chemicaldealerphonecontact
 * @property string $kequip_prod_chemicaldealeremailcontact
 */
class Chemicalitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kequip_prod_chemicalitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kequip_prod_chemicalitem', 'kequip_prod_chemicalitemavatar', 'kequip_prod_chemicalitemdetails', 'kequip_prod_chemicalmanufacturer', 'kequip_prod_chemicaldealername', 'kequip_prod_chemicaldealerlogo', 'kequip_prod_chemicaldealerphonecontact', 'kequip_prod_chemicaldealeremailcontact'], 'required'],
            [['kequip_prod_chemicalitem', 'kequip_prod_chemicalitemavatar', 'kequip_prod_chemicalmanufacturer', 'kequip_prod_chemicaldealername', 'kequip_prod_chemicaldealerlogo', 'kequip_prod_chemicaldealerphonecontact', 'kequip_prod_chemicaldealeremailcontact'], 'string', 'max' => 100],
            [['kequip_prod_chemicalitemdetails'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kequip_prod_chemicalitem' => 'Id Kequip Prod Chemicalitem',
            'kequip_prod_chemicalitem' => 'Kequip Prod Chemicalitem',
            'kequip_prod_chemicalitemavatar' => 'Kequip Prod Chemicalitemavatar',
            'kequip_prod_chemicalitemdetails' => 'Kequip Prod Chemicalitemdetails',
            'kequip_prod_chemicalmanufacturer' => 'Kequip Prod Chemicalmanufacturer',
            'kequip_prod_chemicaldealername' => 'Kequip Prod Chemicaldealername',
            'kequip_prod_chemicaldealerlogo' => 'Kequip Prod Chemicaldealerlogo',
            'kequip_prod_chemicaldealerphonecontact' => 'Kequip Prod Chemicaldealerphonecontact',
            'kequip_prod_chemicaldealeremailcontact' => 'Kequip Prod Chemicaldealeremailcontact',
        ];
    }
}
