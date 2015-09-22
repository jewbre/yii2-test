<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubièan
 * Date: 22.9.2015.
 * Time: 22:13
 */

use yii\helpers\Html;

?>

<h1>Status update</h1>
<p>
    <label>Text:</label>
    <?=Html::encode($model->text)?>
</p>
<p>
    <label>Permissions</label>
    <?=Html::encode($model->getPermissionsLabel($model->permissions))?>
</p>
