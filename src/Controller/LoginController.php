<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class LoginController implements IController
{

    public function request(): void
    {
        $email = filter_input(INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );

        if (is_null($email) || $email === false) {
            header('Location: /login-form');
            exit();
        }

        $senha = filter_input(INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING);

        Transaction::open();
        $usuario = Funcionarios::findByCondition("email='{$_POST['email']}'");
        if (is_null($usuario) || !$usuario->valide($senha)) {
            header('Location: /login-form');
            exit();
        }

       $tipo=  $usuario->tipo;
        switch ($tipo){
            case 1:
                //secretario
                $_SESSION["usuario"]=$usuario;
                header('Location: /opcoes');
                exit();
            case 2:
                //acs
                $_SESSION["usuario"]=$usuario;
                header('Location: /opcoesAcs');
                exit();
            case 3:
                //enfermeiro
                $_SESSION["usuario"]=$usuario;
                header('Location: /opcoesAtendente');
                exit();
            case 4:
                //medico
                $_SESSION["usuario"]=$usuario;
                header('Location: /opcoesMedico');
                exit();
            case 5:
                //dentista
                $_SESSION["usuario"]=$usuario;
                header('Location: /listar-medicamento');
                exit();
            case 6:
                //atendente
                $_SESSION["usuario"]=$usuario;
                header('Location: /opcoesAtendente');
                exit();

        }



    }
}