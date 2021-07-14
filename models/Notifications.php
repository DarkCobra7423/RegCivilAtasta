<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notifications".
 *
 * @property int $idnotifications
 * @property string $title
 * @property string|null $message
 * @property string $datatime
 * @property int $read
 * @property int $fkprofile
 * @property int $fkoffice
 * @property int $fkadministrativeunit
 *
 * @property Administrativeunit $fkadministrativeunit0
 * @property Office $fkoffice0
 * @property Profile $fkprofile0
 */
class Notifications extends \yii\db\ActiveRecord {
    
    public $number;

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'notifications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['title', 'read', 'fkprofile', 'fkoffice', 'fkadministrativeunit'], 'required'],
                [['datatime'], 'safe'],
                [['read', 'fkprofile', 'fkoffice', 'fkadministrativeunit'], 'integer'],
                [['title'], 'string', 'max' => 40],
                [['message'], 'string', 'max' => 50],
                [['fkadministrativeunit'], 'exist', 'skipOnError' => true, 'targetClass' => Administrativeunit::className(), 'targetAttribute' => ['fkadministrativeunit' => 'idadministrativeunit']],
                [['fkoffice'], 'exist', 'skipOnError' => true, 'targetClass' => Office::className(), 'targetAttribute' => ['fkoffice' => 'idoffice']],
                [['fkprofile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['fkprofile' => 'idprofile']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'idnotifications' => 'Idnotifications',
            'title' => 'Title',
            'message' => 'Message',
            'datatime' => 'Datatime',
            'read' => 'Read',
            'fkprofile' => 'Fkprofile',
            'fkoffice' => 'Fkoffice',
            'fkadministrativeunit' => 'Fkadministrativeunit',
        ];
    }

    /**
     * Gets query for [[Fkadministrativeunit0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkadministrativeunit0() {
        return $this->hasOne(Administrativeunit::className(), ['idadministrativeunit' => 'fkadministrativeunit']);
    }

    /**
     * Gets query for [[Fkoffice0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkoffice0() {
        return $this->hasOne(Office::className(), ['idoffice' => 'fkoffice']);
    }

    /**
     * Gets query for [[Fkprofile0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkprofile0() {
        return $this->hasOne(Profile::className(), ['idprofile' => 'fkprofile']);
    }
    
    public function getOffice(){
        return $this->getFkoffice0();
    }

    public static function notificationsPush() {

        $nofications = Notifications::find()->all();

        foreach ($nofications as $nofication) {

            return '
                notifications.push({
                href: "'.$nofication->idnotifications.'",
                image: "#aqui la imagen",
                texte: "'.$nofication->title.' " + makeBadge("'.$nofication->fkoffice0->idoffice.'"),
                date: "'.$nofication->datatime.'"
                });
                ';
        }

        //return $nofications;
    }

}
