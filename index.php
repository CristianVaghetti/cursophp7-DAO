<?php
    require_once("config.php");
    // $sql = new Sql();
    // $usuarios = $sql -> select("SELECT * FROM tb_usuarios");
    // echo json_encode($usuarios);
// ===============================================================
    // $root = new Usuario();
    // $root -> loadById(3);
    // echo $root
// ===============================================================
    // $lista = Usuario::getList();
    // echo json_encode($lista);
// ===============================================================
    // $search = Usuario::search("us");
    // echo json_encode($search);
// ===============================================================
    // $usuario = new Usuario();
    // $usuario -> login("user1", "pass1");
    // echo $usuario; 
    //NÃO TA FUNCIONANDO POIS INCLUI O MD5 NAS SENHAS
// ===============================================================   
    // $novo = new Usuario("Cristian", "goxtozo");
    // $novo -> insert();
    // echo $novo
// ===============================================================
    // $usuario = new Usuario();
    // $usuario -> loadById(1);
    // $usuario -> update("user1", "pass1");
    // echo $usuario;
// ===============================================================
    $delUsuario = new Usuario();
    $delUsuario -> loadById(1);
    $delUsuario -> delete();
    echo $delUsuario;


?>