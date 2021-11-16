<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id',
                'contentOptions' =>[ 
                'style' => 'width:60px;']
                ],

            
            'name',
            // 'description:ntext',
            'image',
            'price',
            // 'status',
            [
                'attribute' => 'status',
                'content' => function($model){
                    return Html::tag('span',$model->status ? 'faol' : 'nofaol',[
                        'class' => $model->status ? 'badge badge-success' : 'badge badge-danger',
                    ]);
                }
            ],
            [
                'attribute' =>'created_at',
                'format' => 'datetime',
                'contentOptions' => [
                'style' => 'white-space:nowrap'
                ]
            ],
            [
                'attribute' =>'updated_at',
                'format' => 'datetime',
                'contentOptions' => [
                    'style' => 'white-space:nowrap'
                         ]             ],
        //    'created_at',
        //    'updated_at',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
