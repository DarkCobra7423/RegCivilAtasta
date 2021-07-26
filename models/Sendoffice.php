<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sendoffice".
 *
 * @property int $fkprofile
 * @property int $fkoffice
 *
 * @property Profile $fkprofile0
 * @property Office $fkoffice0
 */
class Sendoffice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sendoffice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fkprofile', 'fkoffice'], 'required'],
            [['fkprofile', 'fkoffice'], 'integer'],
            [['fkprofile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['fkprofile' => 'idprofile']],
            [['fkoffice'], 'exist', 'skipOnError' => true, 'targetClass' => Office::className(), 'targetAttribute' => ['fkoffice' => 'idoffice']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fkprofile' => 'Fkprofile',
            'fkoffice' => 'Fkoffice',            
        ];
    }

    /**
     * Gets query for [[Fkprofile0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkprofile0()
    {
        return $this->hasOne(Profile::className(), ['idprofile' => 'fkprofile']);
    }

    /**
     * Gets query for [[Fkoffice0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkoffice0()
    {
        return $this->hasOne(Office::className(), ['idoffice' => 'fkoffice']);
    }
}
