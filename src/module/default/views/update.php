<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>


use yii\helpers\Html;
use yii\adminUi\widget\Box;
use yii\adminUi\widget\Row;
use yii\adminUi\widget\Column;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= $generator->generateString('Update {modelClass}: ', ['modelClass' => Inflector::camel2words(StringHelper::basename($generator->modelClass))]) ?> . ' ' . $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model-><?= $generator->getNameAttribute() ?>, 'url' => ['view', <?= $urlParams ?>]];
$this->params['breadcrumbs'][] = <?= $generator->generateString('Update') ?>;

Row::begin();
    Column::begin();
        Box::begin([
            'type' => Box::TYPE_INFO,
            'header' => $model->title,
            'headerIcon' => 'fa fa-gear',
        ]);
        echo  $this->render('_form', [
            'model' => $model,
        ]);
        Box::end();
    Column::end();
Row::end();
?>