<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kequip_prod_civilitems".
 *
 * @property int $id_kequip_prod_civilitem
 * @property string $kequip_prod_civilitem
 * @property string $kequip_prod_civilitemavatar
 * @property string $kequip_prod_civilitemdetails
 * @property string $kequip_prod_civilmanufacturer
 * @property string $kequip_prod_civildealername
 * @property string $kequip_prod_civildealerlogo
 * @property string $kequip_prod_civildealerphonecontact
 * @property string $kequip_prod_civildealeremailcontact
 */
class Civilitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kequip_prod_civilitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kequip_prod_civilitem', 'kequip_prod_civilitemavatar', 'kequip_prod_civilitemdetails', 'kequip_prod_civilmanufacturer', 'kequip_prod_civildealername', 'kequip_prod_civildealerlogo', 'kequip_prod_civildealerphonecontact', 'kequip_prod_civildealeremailcontact'], 'required'],
            [['kequip_prod_civilitem', 'kequip_prod_civilitemavatar', 'kequip_prod_civilmanufacturer', 'kequip_prod_civildealername', 'kequip_prod_civildealerlogo', 'kequip_prod_civildealerphonecontact', 'kequip_prod_civildealeremailcontact'], 'string', 'max' => 100],
            [['kequip_prod_civilitemdetails'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kequip_prod_civilitem' => 'Id Kequip Prod Civilitem',
            'kequip_prod_civilitem' => 'Kequip Prod Civilitem',
            'kequip_prod_civilitemavatar' => 'Kequip Prod Civilitemavatar',
            'kequip_prod_civilitemdetails' => 'Kequip Prod Civilitemdetails',
            'kequip_prod_civilmanufacturer' => 'Kequip Prod Civilmanufacturer',
            'kequip_prod_civildealername' => 'Kequip Prod Civildealername',
            'kequip_prod_civildealerlogo' => 'Kequip Prod Civildealerlogo',
            'kequip_prod_civildealerphonecontact' => 'Kequip Prod Civildealerphonecontact',
            'kequip_prod_civildealeremailcontact' => 'Kequip Prod Civildealeremailcontact',
        ];
    }
}
