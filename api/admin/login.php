<?php
declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

$raw = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!is_array($data)) {
    $data = $_POST;
}

$username = trim((string)($data['username'] ?? ADMIN_USERNAME));
$password = (string)($data['password'] ?? '');

if ($username !== ADMIN_USERNAME) {
    json_response(["ok" => false, "message" => "Nom d'utilisateur incorrect."], 401);
}

if (!password_verify($password, ADMIN_PASSWORD_HASH)) {
    json_response(["ok" => false, "message" => "Mot de passe incorrect."], 401);
}

session_regenerate_id(true);
$_SESSION['admin_logged_in'] = true;
$_SESSION['admin_username'] = ADMIN_USERNAME;
$_SESSION['admin_login_at'] = time();

json_response(['ok' => true]);
