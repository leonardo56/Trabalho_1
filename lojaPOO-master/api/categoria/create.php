<?php

//vai usar o CategoriaDAO.php
require_once "../../model/CategoriaDAO.php";
require_once "../../model/Categoria.php";

//cria uma instância do CategoriaDAO
// pego os dados em texto como chegou
$dados = file_get_contents('php://input');
print_r($dados);

// transformo dados em um array

$dados=json_decode($dados,true);

$nome = $dados['nome'];  //um ou outro - array ou objeto
$descricao = $dados['descricao'];

$categoria = new Categoria($nome, $descricao);

$dao =new CategoriaDAO();

$dao->insert($categoria);