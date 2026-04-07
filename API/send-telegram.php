<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $message === '') {
        die("All fields are required.");
    }

    // Example token only
    $botToken = "8648558019:AAHImsUZ7UJK8t1b629JTTxSd3vvHpH0rhY";
    $chatId = "1135238504";

    $text = "Waafi Website Message\n\n"
          . "Name: $name\n"
          . "Email: $email\n"
          . "Message: $message";

    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

    $data = [
        "chat_id" => $chatId,
        "text" => $text
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        die("cURL Error: " . curl_error($ch));
    }

    curl_close($ch);

    $result = json_decode($response, true);

    if (isset($result['ok']) && $result['ok'] === true) {
        echo "Message sent successfully.";
    } else {
        echo "Telegram error: " . ($result['description'] ?? 'Unknown error');
    }
}
?>