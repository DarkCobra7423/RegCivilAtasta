<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrativeunit".
 *
 * @property int $idadministrativeunit
 * @property string|null $image
 * @property string $name
 * @property string $description
 * @property string|null $note
 * @property int $fkheadline
 *
 * @property Profile $fkheadline0
 * @property Notifications[] $notifications
 * @property Office[] $offices
 * @property Profile[] $profiles
 */
class Administrativeunit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'administrativeunit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'fkheadline'], 'required'],
            [['description'], 'string'],
            [['fkheadline'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 50],
            [['note'], 'string', 'max' => 30],
            [['fkheadline'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['fkheadline' => 'idprofile']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idadministrativeunit' => 'Idadministrativeunit',
            'image' => 'Image',
            'name' => 'Name',
            'description' => 'Description',
            'note' => 'Note',
            'fkheadline' => 'Fkheadline',
        ];
    }

    /**
     * Gets query for [[Fkheadline0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkheadline0()
    {
        return $this->hasOne(Profile::className(), ['idprofile' => 'fkheadline']);
    }

    /**
     * Gets query for [[Notifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotifications()
    {
        return $this->hasMany(Notifications::className(), ['fkadministrativeunit' => 'idadministrativeunit']);
    }

    /**
     * Gets query for [[Offices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOffices()
    {
        return $this->hasMany(Office::className(), ['fkadministrativeunit' => 'idadministrativeunit']);
    }

    /**
     * Gets query for [[Profiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profile::className(), ['fkworksin' => 'idadministrativeunit']);
    }
}
