<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guest".
 *
 * @property int $idguest
 * @property string $email
 * @property string $nameandlastname
 * @property int $fkoffice
 *
 * @property Office $fkoffice0
 */
class Guest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'nameandlastname', 'fkoffice'], 'required'],
            [['fkoffice'], 'integer'],
            [['email'], 'string', 'max' => 100],
            [['nameandlastname'], 'string', 'max' => 200],
            [['fkoffice'], 'exist', 'skipOnError' => true, 'targetClass' => Office::className(), 'targetAttribute' => ['fkoffice' => 'idoffice']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idguest' => 'Idguest',
            'email' => 'Email',
            'nameandlastname' => 'Nameandlastname',
            'fkoffice' => 'Fkoffice',
        ];
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
