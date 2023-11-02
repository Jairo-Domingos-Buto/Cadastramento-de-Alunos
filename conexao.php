<?php 
$host='Localhost';
$username='root';
$dbname='turmas';
$password='';

$conexao = new mysqli($host,$username,$dbname,$password);


if ($conexao->connect_errno){
    echo "Erro";
}
else{
    echo "Já está";
}

?>