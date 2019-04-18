<?php

$nome = $_GET['nome1'];
$idade = $_GET['idade1'];

$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //root
$password = '';//senha no mysql = vazio
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$count = $dbh->exec("insert into exemplo1(nome, idade) 
                values('$nome', '$idade','$datadenascimento','$salario') ");

echo "<p>$count registro foi incluído</p>";

echo "<br><br><a href=index.php>Voltar</a>  ";
?>

