<?php
function buscar_usuario($usuario, $senha)
{
    //incluir o arquivo de conexão
    include_once 'conn.php';
    //estabelecer conexão com o banco de dados
    $conn = conectar();
    //buscar na tabela usuario_tb
    $sql="SELECT * FROM usuario_tb WHERE usuario = '$usuario' AND senha = '$senha'";

    $result = mysqli_query($conn, $sql);

    //verificar o numero de linhas afetadas pelo comando sql
    if(mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    return false;

}


?>