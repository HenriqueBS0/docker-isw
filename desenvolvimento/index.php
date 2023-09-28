<h1>Desenvolvimento</h1>

<?php

$host = "desenvolvimento_db";
$port = "5432";
$dbname = "desenvolvimento_db";
$user = "desenvolvimento_user";
$password = "desenvolvimento_password";

try {
    $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($db) {
        echo "Conexão com o PostgreSQL bem-sucedida!";
    }
} catch (PDOException $e) {
    echo "Erro na conexão com o PostgreSQL: " . $e->getMessage();
}
