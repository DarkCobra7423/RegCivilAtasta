<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jobtitle".
 *
 * @property int $idjobtitle
 * @property string $jobtitle
 *
 * @property Profile[] $profiles
 */
class Jobtitle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobtitle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jobtitle'], 'required'],
            [['jobtitle'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idjobtitle' => 'Idjobtitle',
            'jobtitle' => 'Jobtitle',
        ];
    }

    /**
     * Gets query for [[Profiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profile::className(), ['fkjobtitle' => 'idjobtitle']);
    }
}
