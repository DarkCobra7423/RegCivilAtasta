<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stateoffice".
 *
 * @property int $idstateoffice
 * @property string $state
 *
 * @property Office[] $offices
 */
class Stateoffice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stateoffice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['state'], 'required'],
            [['state'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idstateoffice' => 'ID',
            'state' => 'State',
        ];
    }

    /**
     * Gets query for [[Offices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOffices()
    {
        return $this->hasMany(Office::className(), ['fkstateoffice' => 'idstateoffice']);
    }
}
