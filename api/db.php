<?php
declare(strict_types=1);

function db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $databaseUrl = getenv('DATABASE_URL');
    if (is_string($databaseUrl) && $databaseUrl !== '') {
        $pdo = connect_from_url($databaseUrl);
    } else {
        $host = getenv('DB_HOST') ?: 'localhost';
        $port = getenv('DB_PORT') ?: '5432';
        $name = getenv('DB_NAME') ?: '';
        $user = getenv('DB_USER') ?: '';
        $pass = getenv('DB_PASSWORD') ?: '';
        $dsn = sprintf('pgsql:host=%s;port=%s;dbname=%s', $host, $port, $name);
        $pdo = new PDO($dsn, $user, $pass, pdo_options());
    }

    migrate($pdo);
    return $pdo;
}

function connect_from_url(string $databaseUrl): PDO
{
    $parts = parse_url($databaseUrl);
    if ($parts === false || empty($parts['host'])) {
        throw new RuntimeException('Invalid DATABASE_URL');
    }

    $host = $parts['host'];
    $port = $parts['port'] ?? 5432;
    $name = ltrim((string)($parts['path'] ?? ''), '/');
    $user = rawurldecode((string)($parts['user'] ?? ''));
    $pass = rawurldecode((string)($parts['pass'] ?? ''));

    $dsn = sprintf('pgsql:host=%s;port=%s;dbname=%s', $host, $port, $name);
    return new PDO($dsn, $user, $pass, pdo_options());
}

function pdo_options(): array
{
    return [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
}

function migrate(PDO $pdo): void
{
    $pdo->exec(
        'CREATE TABLE IF NOT EXISTS app_store (
            store_key VARCHAR(128) PRIMARY KEY,
            store_value JSONB NOT NULL,
            updated_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
        )'
    );
}

function decode_store_value(mixed $value): mixed
{
    if (is_string($value)) {
        return json_decode($value, true);
    }
    return $value;
}
