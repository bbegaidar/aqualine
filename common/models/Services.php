<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property int $is_active
 * @property string|null $name_rus
 * @property string|null $name_eng
 * @property string|null $body_rus
 * @property string|null $body_eng
 * @property string|null $advantage_rus
 * @property string|null $advantage_eng
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    public $advant_rus, $advant_eng;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body_rus', 'body_eng','advantage_rus', 'advantage_eng'], 'string'],
            ['is_active', 'integer'],
            [['advantage_rus', 'advantage_eng'], 'trim'],
            [['name_rus', 'name_eng'], 'string', 'max' => 255],            
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
            'body_rus' => 'Описание на рус',
            'body_eng' => 'Описание на анг',
            'advantage_rus' => 'Заказав у нас, Вы получите на рус',
            'advantage_eng' => 'Заказав у нас, Вы получите на анг',
            'advant_rus' => 'Заказав у нас, Вы получите на рус',
            'advant_eng' => 'Заказав у нас, Вы получите на анг',
            'is_active' => 'Активный | Не активный',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ServicesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServicesQuery(get_called_class());
    }
}
