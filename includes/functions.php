<?php

require_once __DIR__ . '/../config/config.php';

function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function base_url($path = '') {
    return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
}

function redirect($url) {
    header('Location: ' . $url);
    exit;
}

function flashMessage($message, $type = 'success') {
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['flash'] = ['message' => $message, 'type' => $type];
}

function hasFlash() {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['flash']);
}

function getFlash() {
    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
