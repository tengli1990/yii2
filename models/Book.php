<?php

namespace app\models;

use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Book extends ActiveRecord
{
  /**
   * @inheridoc
   * @return {String} 表名称
   */
  public static function tableName()
  {
    return '{{%book}}';
  }

  public function behaviors()
  {
    return [
      [
        'class' => AttributeBehavior::className(),
        'attributes' => [
          ActiveRecord::EVENT_BEFORE_INSERT => 'created_at',
          ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
        ],
        // if you're using datetime instead of UNIX timestamp:
        'value' => new Expression('NOW()'),
      ],
    ];
  }

  /**
   * 
   */
  public function rules()
  {
    return [
      [['name', 'introduction'], 'required'],
      [['name'], 'string', 'max' => 64],
      [['author'], 'string', 'max' => 64],
      [['introduction'], 'string', 'max' => 128],
      [['price'],'string']
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'name' => '名称',
      'author' => '作者',
      'introduction' => '简介',
      'price' => '价格',
      'created_at' => '创建时间',
      'updated_at' => '更新时间'
    ];
  }
}
