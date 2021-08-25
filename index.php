<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//carrega um usuario
/*$root = new Usuario();
$root->loadById(3);

echo $root;*/

//carrega lista de usuarios
/*$list = Usuario::getList();
echo json_encode($list);*/

//Carrega lista de usuarios buscando por login
/*$search = Usuario::search("jo");

echo json_encode($search);*/

//carrega um usuario usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("user", "12345");

echo $usuario;*/
//Criando um novo usuario
/*$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;*/
//alterar usuario
/*$usuario = new Usuario();
$usuario->loadByID(9);
$usuario->update("professor", "wasd");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadByID(10);
$usuario->delete();

echo $usuario;
 ?>