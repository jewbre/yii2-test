<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubièan
 * Date: 22.9.2015.
 * Time: 22:17
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Status;
?>

<?php
    $form = ActiveForm::begin();
?>
    <?= $form->field($model, "text")->
        textarea(array("rows" => 4, "placeholder" => 'testna vrijednost'))->
        label("Status update");?>

    <?= $form->field($model, "permissions")->
        dropDownList( (new Status())->getPermissions(), array("prompt" => "select your value"))->
        label("Permissions");
    ?>

    <div class="form-group">
        <?= Html::submitButton("Submit", array('class' => "btn btn-primaty"));?>
    </div>

<?php
    ActiveForm::end(); ?>
