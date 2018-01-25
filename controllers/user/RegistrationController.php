<?php
namespace app\controllers\user;

use dektrium\user\controllers\RegistrationController as BaseRegistrationController;

class RegistrationController extends BaseRegistrationController
{
    public $layout = '//main-login';
}
