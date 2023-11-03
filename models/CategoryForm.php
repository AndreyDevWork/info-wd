<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $preview
 * @property int|null $parent_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $is_active
 */
class CategoryForm extends \yii\db\ActiveRecord
{


    public static function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description'], 'string'],
            [['parent_id', 'is_active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'preview'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'description' => 'Описание',
            'preview' => 'Изображение',
            'parent_id' => 'Parent ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_active' => 'Активность',
        ];
    }
}
