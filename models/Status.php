<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubièan
 * Date: 22.9.2015.
 * Time: 22:04
 */

namespace app\models;

use yii\base\Model;

class Status extends Model
{
    const PERMISSIONS_PRIVATE   = 10;
    const PERMISSIONS_PUBLIC    = 20;

    public $text;
    public $permissions;

    public function rules()
    {
        return array(
            array(["text", "permissions"], "required"),
        );
    }

    public function getPermissions()
    {
        return array( self::PERMISSIONS_PRIVATE => "Private", self::PERMISSIONS_PUBLIC => "Public");
    }

    public function getPermissionsLabel($permission)
    {
        if($permission = self::PERMISSIONS_PUBLIC) {
            return "Public";
        } else {
            return "Private";
        }
    }

}