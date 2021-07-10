<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "office".
 *
 * @property int $idoffice
 * @property string $expedient
 * @property int $nooffice
 * @property string $subject
 * @property string $creationdate
 * @property string $category
 * @property int $fkstateoffice
 * @property int $fkadministrativeunit
 * @property string|null $shifteddate
 * @property int|null $fkto
 * @property string|null $reviseddate
 * @property string|null $observations
 *
 * @property Notifications[] $notifications
 * @property Administrativeunit $fkadministrativeunit0
 * @property Profile $fkto0
 * @property Stateoffice $fkstateoffice0
 * @property Officefile[] $officefiles
 * @property File[] $idfiles
 */
class Office extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'office';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['expedient', 'nooffice', 'subject', 'creationdate', 'category', 'fkstateoffice', 'fkadministrativeunit'], 'required'],
            [['nooffice', 'fkstateoffice', 'fkadministrativeunit', 'fkto'], 'integer'],
            [['creationdate', 'shifteddate', 'reviseddate'], 'safe'],
            [['observations'], 'string'],
            [['expedient'], 'string', 'max' => 45],
            [['subject'], 'string', 'max' => 100],
            [['category'], 'string', 'max' => 10],
            [['fkadministrativeunit'], 'exist', 'skipOnError' => true, 'targetClass' => Administrativeunit::className(), 'targetAttribute' => ['fkadministrativeunit' => 'idadministrativeunit']],
            [['fkto'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['fkto' => 'idprofile']],
            [['fkstateoffice'], 'exist', 'skipOnError' => true, 'targetClass' => Stateoffice::className(), 'targetAttribute' => ['fkstateoffice' => 'idstateoffice']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idoffice' => 'ID',
            'expedient' => 'Expediente',
            'nooffice' => 'No. Oficio',
            'subject' => 'Asunto',
            'creationdate' => 'Fecha de creacion',
            'category' => 'Categoria',
            'fkstateoffice' => 'Estado Oficio',
            'fkadministrativeunit' => 'Unidad Admin.',
            'shifteddate' => 'Fecha Turnado',
            'fkto' => 'Para',
            'reviseddate' => 'Fecha Revisado',
            'observations' => 'Observaciones',
            'stateoffice' => 'Estado Oficio'
        ];
    }

    /**
     * Gets query for [[Notifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotifications()
    {
        return $this->hasMany(Notifications::className(), ['fkoffice' => 'idoffice']);
    }

    /**
     * Gets query for [[Fkadministrativeunit0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkadministrativeunit0()
    {
        return $this->hasOne(Administrativeunit::className(), ['idadministrativeunit' => 'fkadministrativeunit']);
    }

    /**
     * Gets query for [[Fkto0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkto0()
    {
        return $this->hasOne(Profile::className(), ['idprofile' => 'fkto']);
    }

    /**
     * Gets query for [[Fkstateoffice0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkstateoffice0()
    {
        return $this->hasOne(Stateoffice::className(), ['idstateoffice' => 'fkstateoffice']);
    }

    /**
     * Gets query for [[Officefiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOfficefiles()
    {
        return $this->hasMany(Officefile::className(), ['idoffice' => 'idoffice']);
    }

    /**
     * Gets query for [[Idfiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdfiles()
    {
        return $this->hasMany(File::className(), ['idfile' => 'idfile'])->viaTable('officefile', ['idoffice' => 'idoffice']);
    }
    
    public function getState(){
        //var_dump($this->fkstateoffice0); die();
        return $this->fkstateoffice0->state;
    }
}
