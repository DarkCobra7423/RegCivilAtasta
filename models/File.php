<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
/**
 * This is the model class for table "file".
 *
 * @property int $idfile
 * @property string $name
 * @property string $file
 * @property string $format
 * @property string $size
 *
 * @property Officefile[] $officefiles
 * @property Office[] $idoffices
 */
class File extends \yii\db\ActiveRecord
{
        //public $files;
        public $maxid;
        public $imageFiles;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'file', 'format', 'size'], 'required'],
            //[['file'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['file'], 'string', 'max' => 255],
            [['format'], 'string', 'max' => 10],
            [['size'], 'string', 'max' => 40],
            /*
            [['files'], 'safe'],
            [['files'], 'file', 'extensions' => 'jpg, gif, png, webp, pdf, doc, docx, txt'],
            [['files'], 'file', 'maxSize' => '100000000'],      */
            [['imageFiles'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 10],
            //[['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idfile'     => 'Idfile',
            'name'       => 'Name',
            'file'       => 'File',
            'format'     => 'Format',
            'size'       => 'Size',
            //'files'      => 'File',
            'imageFiles'  => 'Archivos',
        ];
    }

    /**
     * Gets query for [[Officefiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOfficefiles()
    {
        return $this->hasMany(Officefile::className(), ['idfile' => 'idfile']);
    }

    /**
     * Gets query for [[Idoffices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdoffices()
    {
        return $this->hasMany(Office::className(), ['idoffice' => 'idoffice'])->viaTable('officefile', ['idfile' => 'idfile']);
    }
    
    public function getUrlfile(){
        return Yii::$app->homeUrl . 'resourcesFiles/office/' . $this->file; 
    }
    


}
