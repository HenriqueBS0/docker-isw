<h1>Qualidade</h1>

<?php
$host = "qualidade_db";
$port = "5432";
$dbname = "qualidade_db";
$user = "qualidade_user";
$password = "qualidade_password";

try {
    $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($db) {
        echo "Conexão com o PostgreSQL bem-sucedida!";
    }
} catch (PDOException $e) {
    echo "Erro na conexão com o PostgreSQL: " . $e->getMessage();
}
