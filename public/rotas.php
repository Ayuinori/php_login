<?php

use EasyPDO\EasyPDO;

    defined('CONTROLO') or die('Acesso negado.');
    
    $rota = null;

    if(!verifica_session() &&  $_SERVER['REQUEST_METHOD'] != 'POST'){
        $rota = 'login';
    } elseif(!verifica_session() &&  $_SERVER['REQUEST_METHOD'] == 'POST'){
        $rota = 'login_submit';
    }

    // apresentar os layouts
    switch ($rota){


        //apresentação do formulario
        case 'login':
            require_once('../views/login_frm.php');
            break;

        case 'login_submit':
            // tentativa de login
            $bd = new EasyPDO();
            $parametro = [
                ':usuario' => $_POST['text_usuario']
            ];

            $resultado = $bd->query("SELECT id_usuario, usuario FROM usuarios WHERE usuario = :usuario", $parametro);

            print_r($resultado);
        }