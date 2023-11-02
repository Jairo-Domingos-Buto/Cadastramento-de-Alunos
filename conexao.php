<?php 
$host='localhost';
$username='root';
$dbname='turmas';
$password='';

$conexao = new mysqli($host,$username,$password,$dbname);


if ($conexao->connect_errno){
    echo "Erro";
}
else{
    echo "Já está";
}

?>