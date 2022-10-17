<?php
function createPDO(): PDO
{
    $dsn = 'mysql:host=db; port=3306; dbname=' . getenv('DB_NAME');
    $username = 'root';
    $password = getenv('DB_ROOT_PASSWORD');
    try {
        return new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
}

$pdo = createPDO();
