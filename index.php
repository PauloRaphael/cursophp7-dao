<?php

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);		

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search

//carrega um usuario usando um login e a senha

$usuario = new Usuario();
$usuario->getList("root", "!@#$");

echo ($usuario);

//$aluno = new Usuario();

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//$aluno->insert();


//echo $aluno;