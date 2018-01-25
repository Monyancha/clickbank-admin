<?php
namespace app\controllers\user;

use dektrium\user\controllers\SecurityController as BaseSecurityController;

class SecurityController extends BaseSecurityController
{
    public $layout = '//main-login';
}
