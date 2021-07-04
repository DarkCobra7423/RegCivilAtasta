<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "officefile".
 *
 * @property int $idoffice
 * @property int $idfile
 *
 * @property File $idfile0
 * @property Office $idoffice0
 */
class Officefile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'officefile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idoffice', 'idfile'], 'required'],
            [['idoffice', 'idfile'], 'integer'],
            [['idoffice', 'idfile'], 'unique', 'targetAttribute' => ['idoffice', 'idfile']],
            [['idfile'], 'exist', 'skipOnError' => true, 'targetClass' => File::className(), 'targetAttribute' => ['idfile' => 'idfile']],
            [['idoffice'], 'exist', 'skipOnError' => true, 'targetClass' => Office::className(), 'targetAttribute' => ['idoffice' => 'idoffice']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idoffice' => 'Idoffice',
            'idfile' => 'Idfile',
        ];
    }

    /**
     * Gets query for [[Idfile0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdfile0()
    {
        return $this->hasOne(File::className(), ['idfile' => 'idfile']);
    }

    /**
     * Gets query for [[Idoffice0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdoffice0()
    {
        return $this->hasOne(Office::className(), ['idoffice' => 'idoffice']);
    }
}
