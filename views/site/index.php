<?php
/** @var yii\web\View $this */
/** @var app\models\CategoryForm $categoryForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<h1>site/index</h1>
<?php $form = ActiveForm::begin([
    'options' => [
        'id' => 'postm',
        'data-pjax' => true,
    ]
]); ?>

    <?= $form->field($categoryForm, 'title')->textInput() ?>
    <?= $form->field($categoryForm, 'description')->textInput() ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end(); ?>