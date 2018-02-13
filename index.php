<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql-> select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Aqui em baixo carrega  1 usuário
//$root = new Usuario();
//$root -> loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


// carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("o");
//echo json_encode($search);

//carrega um usuário usando o login e a senha;
//$verifica = new Usuario();
//$verifica->login("root", "123");
//echo $verifica;

//Criando um novo usuário
//$aluno = new Usuario();
//$aluno -> setDeslogin("aluno");
//$aluno -> setDessenha("1234");
//$aluno -> insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("Teste", "54654");
echo $usuario;

?>