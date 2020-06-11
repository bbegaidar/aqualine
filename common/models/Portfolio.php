<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property int $is_active
 * @property string|null $name_rus
 * @property string|null $name_eng
 * @property int|null $area
 * @property string|null $location_rus
 * @property string|null $location_eng
 * @property string|null $images
 * @property string $logo_path
 * @property int $category_id
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    public $photos;
    public $logo_img;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area'], 'integer'],
            [['is_active', 'category_id'], 'integer'],
            ['category_id', 'required'],
            [['name_rus', 'name_eng', 'location_rus', 'location_eng', 'logo_path'], 'string', 'max' => 255],
            ['images', 'string'],
            [['photos'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg, gif', 'maxFiles' => 3, 'on' => 'create'],
            [['photos'], 'file', 'extensions' => 'png, jpg, jpeg, gif', 'maxFiles' => 3, 'on' => 'update'],
            [['logo_img'], 'file', 'extensions' => 'png, jpg, jpeg, gif', 'on' => 'create'],
            [['logo_img'], 'file', 'extensions' => 'png, jpg, jpeg, gif', 'on' => 'update'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_rus' => 'Название услуги на рус',
            'name_eng' => 'Название услуги на анг',
            'area' => 'Площадь, кв.м',
            'location_rus' => 'Локация на рус',
            'location_eng' => 'Локация на анг',
            'images' => 'Картинки',
            'is_active' => 'Активировать',
            'photos' => 'Загурзите картинки',
            'logo_img' => 'Загурзите логотип',
            'category_id' => 'Выберите категорию'
        ];
    }

    /**
     * {@inheritdoc}
     * @return PortfolioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PortfolioQuery(get_called_class());
    }

    public function saveImg()
    {
        if ($this->validate()) {
            $saveDir = Yii::getAlias('@frontend/web/uploads/');
            $dir = Yii::getAlias('@frontend/web');
            if(!file_exists($saveDir)){
                mkdir($saveDir, 0775, true);
            }
            $time = strtotime(date('Y-m-d H:i:s'));
            $photos = array();
            foreach ($this->photos as $file) {
                $path = '/uploads/' . $file->baseName .'_'. $time . '.' . $file->extension;
                array_push($photos, $path);
            }
            $this->images = json_encode($photos);
            return true;
        }
        return false;
    }

    public function saveLogo()
    {
        if ($this->validate()) {
            $saveDir = Yii::getAlias('@frontend/web/uploads/');
            $dir = Yii::getAlias('@frontend/web');
            if(!file_exists($saveDir)){
                mkdir($saveDir, 0775, true);
            }
            $time = strtotime(date('Y-m-d H:i:s'));            
            $path = '/uploads/' . $logo_img->baseName .'_'. $time . '.' . $logo_img->extension;                
            $this->logo_path = $path;
            return true;
        }
        return false;
    }

    public function upload()
    {
        if ($this->validate()) {
            $dir = Yii::getAlias('@frontend/web');            
            $photos = json_decode($this->images);
            $counter = 0;
            foreach ($this->photos as $file) {                
                $file->saveAs($dir . $photos[$counter]);
                $counter++;
            }
            return true;
        } else {
            return false;
        }
    }

    public function uploadLogo() {
        $dir = Yii::getAlias('@frontend/web');
        $this->logo_img->saveAs($dir . $this->logo_path);
    }

    public static function unlinkPhotos($arrPath) {
        if (!empty($arrPath)) {
            $dir = Yii::getAlias('@frontend/web');
            foreach ($arrPath as $files) {
                foreach ($files as $file) {
                    if (!empty($file) && file_exists($dir . $file)) {
                        unlink($dir . $file);
                    }
                }                
            }
        }    
        return true;
    }

    public function getName() {
        $lang = Yii::$app->language;
        if ($lang == 'en') {
            return $this->name_eng;
        }
        else {
            return $this->name_rus;
        }
    }
    
    public function getLocation() {
        $lang = Yii::$app->language;
        if ($lang == 'en') {
            return $this->location_eng;
        }
        else {
            return $this->location_rus;
        }
    }
    
}
