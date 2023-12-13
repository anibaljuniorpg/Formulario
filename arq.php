<?php 

    $dbhost = 'Localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbnane = 'formulario';

    $conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname); 

    if( $conexao -> connect_errno){
        echo 'erro';
    }
    else {
        echo 'tudo certo';
    }

?>