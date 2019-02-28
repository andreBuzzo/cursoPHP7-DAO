<?php 

require_once ("config/config.php");

/*
CARREGA UM USUÁRIO
$root = new Usuario();
$root->loadById(2);
echo $root;
*/

/*
CARREGA UMA LISTA DE USUÁRIOS
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*EFETUA UMA PESQUISA NO BANCO

$login = "tuco";
$senha = "123456";
$search = new Usuario();
$search->login($login, $senha);
echo $search;
*/

/*fazendo um insert no banco de dados usando DAO
$usuario = new Usuario();
$usuario->setDeslogin("aluno");
$usuario->setDessenha("kkkk");
$usuario->insert();
echo $usuario;
*/

/*alterando um usuário no banco de dados
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("mario", "123456kk");
echo $usuario;
*/

/*deletando um usuário no banco de dados*/
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;


?>