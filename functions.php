<?php
function pwGenerator($user_length)
    {
        // variabile password da riempire + variabile caratteri
        $password = "";
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789,;.:-_'?!$%&|\=[]@#<>";
        // iterazione per la lunghezza impostata dall'utente
        for ($k = 0; $k < $user_length; $k++) {
            // rand method: genera numero random tra 0 e lunghezza stringa $char - 1 (pescaggio index)
            $password .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $password;
    }
?>