<?php
$id=$_GET['id'];

$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //mysql usuario=root
$password = '';//sem senha

try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$sql = "SELECT * FROM exemplo1 where id=$id";

foreach ($dbh->query($sql) as $row) {
    echo "<form action=salvar_editar.php>";
    echo "<p>Nome</p>";
    echo "<p><input type=text name=nome value='".
            $row['nome'] . "'>";
    echo "<p>Idade</p>";
    echo "<p><input type=number name=idade value=".
            $row['idade'] . ">";
            echo "<p>Salario</p>";
    echo "<p><input type=number name=salario value='".
            $row['salario'] . "'>";
            echo "<p>Datadenascimento</p>";
    echo "<p><input type=date_add name=datadenascimento value='".
            $row['nome'] . "'>";
    echo "<input type=hidden name=id value=". 
            $row['id'] . " >";
    echo "<br><br> <input type=submit value=Salvar>";
echo "</form>";
}
echo "<br><br>
<a href=index.php>Voltar</a> ";