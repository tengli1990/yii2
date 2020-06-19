<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\AttributeBehavior;
use app\models\Book;
use app\models\BookSearch;
use yii\db\Expression;

class BookController extends Controller
{


  /**
   * @inheritdoc
   */
  public function behaviors()
  {
    return [
      [
        'class' => TimestampBehavior::className(),
        'createdAtAttribute' => 'created_at', // 自己根据数据库字段修改
        'updatedAtAttribute' => 'updated_at', // 自己根据数据库字段修改, // 自己根据数据库字段修改
        //'value'   => new Expression('NOW()'),
        'value'   => function () {
          return date('Y-m-d H:i:s', time());
        },
      ],
    ];
  }


  public function actionIndex()
  {
    $searchModel = new BookSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    return $this->render('index', [
      'searchModel' => $searchModel,
      'dataProvider' => $dataProvider,
    ]);
  }

  public function actionCreate()
  {
    $model  = new Book();
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      return $this->redirect(['view', 'id' => $model->id]);
    }
    return $this->render('create', [
      'model' => $model
    ]);
  }


  public function actionUpdate($id)
  {

    $model  = $this->findModel($id);
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      return $this->redirect(['view', 'id' => $model->id]);
    }
    return $this->render('update', [
      'model' => $model
    ]);
  }


  public function actionView($id)
  {
    return $this->render('view', [
      'model' => $this->findModel($id)
    ]);
  }

  protected function findModel($id)
  {
    $model = Book::findOne($id);
    if ($model !== null) {
      return $model;
    }

    throw new NotFoundHttpException('The requested page does not exist.');
  }
}
