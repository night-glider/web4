<?php require 'db.php' ?>

<?php
header('Content-Type: application/json');//сообщаем браузеру, что ответ будет в формате JSON

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

echo json_encode(['success' => true]);