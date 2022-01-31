<?php
 function hash_pwd($pwd){
     password_hash($pwd,PASSWORD_DEFAULT,['cost'=>14]);
     //cost permet de ralentir l'édition du pwd
 }
function verif_Pwd($pwd,$hash){
    password_verify($pwd,$hash);
}
?>