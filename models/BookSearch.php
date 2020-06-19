<?php
  namespace app\models;

  use yii\data\ActiveDataProvider;
  use yii\base\Model;
  use app\models\Book;

  class BookSearch extends Book 
  {
    public function rules()
    {
      return [

      ];
    }

    public function search($params){
      $query = Book::find();

      $dataProvider = new ActiveDataProvider([
        'query' => $query
      ]);
      
      $this->load($params);

      if(!$this->validate()){
        return $dataProvider;
      }

      // $query -> andFilterWhere([
      //   ''
      // ])

      return $dataProvider;

    }
  }