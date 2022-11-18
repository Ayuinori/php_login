<?php

    defined('CONTROLO') or die('Acesso negado.');
    
    $rota = null;

    if(!verifica_session()){
        $rota = 'login';
    } else {
        $rota = 'logado';
    }

    // apresentar os layouts
    switch ($rota){
        case 'login':
            require_once('../views/login_frm.php');
            break;
    }