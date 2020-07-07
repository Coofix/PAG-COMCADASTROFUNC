<?php

    include("php/conexao.php");

    $sql_code = "SELECT max(id_paciente) as id_paciente FROM PACIENTE";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $numero = $sql_query->fetch_assoc();

    //echo $numero['id_paciente'];

     $select = $numero['id_paciente'] ;
    echo $select;

?>