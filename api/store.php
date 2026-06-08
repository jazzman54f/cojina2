<?php
declare(strict_types=1);

require_once __DIR__ . '/admin/bootstrap.php';
require_once __DIR__ . '/db.php';

const PUBLIC_READ_KEYS = [
    'elcojina_menu',
    'elcojina_daily',
    'elcojina_categories',
    'elcojina_reviews',
];

const PUBLIC_WRITE_KEYS = [
    'elcojina_orders',
    'elcojina_reservations',
    'elcojina_subscribers',
];

const ADMIN_KEYS = [
    'elcojina_menu',
    'elcojina_daily',
    'elcojina_categories',
    'elcojina_reviews',
    'elcojina_orders',
    'elcojina_reservations',
    'elcojina_subscribers',
];

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

try {
  if ($method === 'GET') {
    handle_get();
  } elseif ($method === 'PUT' || $method === 'POST') {
    handle_put();
  } else {
    json_response(['ok' => false, 'message' => 'Method not allowed'], 405);
  }
} catch (Throwable $e) {
  $debug = getenv('APP_DEBUG') === 'true';
  json_response([
    'ok' => false,
    'message' => $debug ? $e->getMessage() : 'Database error',
  ], 500);
}

function handle_get(): void
{
  $pdo = db();
  $admin = is_admin_logged_in();
  $keys = $admin ? ADMIN_KEYS : PUBLIC_READ_KEYS;

  if (!$keys) {
    json_response(['ok' => true, 'data' => []]);
  }

  $placeholders = implode(',', array_fill(0, count($keys), '?'));
  $stmt = $pdo->prepare("SELECT store_key, store_value FROM app_store WHERE store_key IN ($placeholders)");
  $stmt->execute($keys);

  $data = [];
  foreach ($stmt->fetchAll() as $row) {
    $data[$row['store_key']] = decode_store_value($row['store_value']);
  }

  json_response(['ok' => true, 'data' => $data]);
}

function handle_put(): void
{
  $raw = file_get_contents('php://input');
  $body = json_decode($raw, true);
  if (!is_array($body)) {
    json_response(['ok' => false, 'message' => 'Invalid JSON body'], 400);
  }

  $key = (string)($body['key'] ?? '');
  if (!in_array($key, ADMIN_KEYS, true)) {
    json_response(['ok' => false, 'message' => 'Invalid key'], 400);
  }

  if (!array_key_exists('value', $body)) {
    json_response(['ok' => false, 'message' => 'Missing value'], 400);
  }

  $isPublicWrite = in_array($key, PUBLIC_WRITE_KEYS, true);
  if (!$isPublicWrite && !is_admin_logged_in()) {
    json_response(['ok' => false, 'message' => 'Unauthorized'], 401);
  }

  $pdo = db();
  $stmt = $pdo->prepare(
    'INSERT INTO app_store (store_key, store_value, updated_at)
     VALUES (:key, :value::jsonb, NOW())
     ON CONFLICT (store_key)
     DO UPDATE SET store_value = EXCLUDED.store_value, updated_at = NOW()'
  );
  $stmt->execute([
    ':key' => $key,
    ':value' => json_encode($body['value'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
  ]);

  json_response(['ok' => true]);
}
