<?php
declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

json_response([
    'ok' => true,
    'loggedIn' => is_admin_logged_in(),
    'username' => $_SESSION['admin_username'] ?? null,
]);
