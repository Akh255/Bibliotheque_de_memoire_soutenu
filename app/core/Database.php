public static function getConnection(): PDO
{
    $dsn = sprintf(
        'mysql:host=%s;dbname=%s;charset=%s',
        $config['db_host'],
        $config['db_name'],
        $config['db_charset']
    );

    $pdo = new PDO($dsn, $config['db_user'], $config['db_password']);
    
    // Activer les exceptions PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Définir le jeu de caractères (version MySQL)
    $pdo->exec("SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci");
    
    // Optionnel : forcer le fetch en tableau associatif par défaut
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    return $pdo;
}
