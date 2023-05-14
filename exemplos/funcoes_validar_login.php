<?php

   function validar_login($user, $password){

        $login_bd = 'judson.paiva';
        $senha_bd = '12345';

        if ($user == $login_bd && $password == $senha_bd) {
            return true;
        }

        return false;
   } 

?>