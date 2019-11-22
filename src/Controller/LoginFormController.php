<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class LoginFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalhologin.php",
                "login-form.php",
                "rodapelogin.php"
            ],
            [
                "titulo"=>"Login"
            ]);
    }
}