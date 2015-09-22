<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Saying something';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Target
        <?= Html::encode($target); ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
