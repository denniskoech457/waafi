<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hormuud Telecom - Unlimited Package</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .checkout-btn {
    width: 100%;
    height: 48px;
    border: none;
    background: #08ad4a;
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    border-radius: 6px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: 0.2s ease;
}

.checkout-btn.loading {
    background: #fff;
    color: #333;
    border: 1px solid #d8d8d8;
}

.spinner {
    width: 18px;
    height: 18px;
    border: 3px solid #d9d9d9;
    border-top: 3px solid #08ad4a;
    border-radius: 50%;
    animation: spin 0.8s linear infinite;
}

@keyframes spin {
    100% {
        transform: rotate(360deg);
    }
}
    body {
      font-family: Arial, Helvetica, sans-serif;
      background: #efefef;
      color: #111;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    ul {
      list-style: none;
    }

    .container {
      width: 92%;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Header */
    .site-header {
  background: #fff;
  border-top: 4px solid #1f1f28;
  border-bottom: 1px solid #d9d9d9;
  position: relative;
  z-index: 1000;
}

.navbar {
  min-height: 88px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
}

.logo {
  display: inline-flex;
  align-items: center;
  max-width: 260px;
}

.logo img {
  width: 100%;
  max-width: 230px;
  height: auto;
  display: block;
}

.nav-menu {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 42px;
  margin: 0;
  padding: 0;
}

.nav-menu li a {
  text-decoration: none;
  color: #111;
  font-size: 16px;
  font-weight: 700;
  transition: 0.2s ease;
}

.nav-menu li a:hover {
  color: #0aa84f;
}

.menu-toggle {
  display: none;
  border: none;
  background: transparent;
  font-size: 30px;
  cursor: pointer;
  color: #111;
  padding: 6px 10px;
}

/* Tablet */
@media (max-width: 992px) {
  .nav-menu {
    gap: 24px;
  }

  .nav-menu li a {
    font-size: 15px;
  }

  .logo img {
    max-width: 200px;
  }
}

/* Mobile */
@media (max-width: 768px) {
  .navbar {
    min-height: 74px;
  }

  .menu-toggle {
    display: block;
  }

  .nav-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: #fff;
    flex-direction: column;
    align-items: flex-start;
    gap: 0;
    border-top: 1px solid #e5e5e5;
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
    padding: 10px 0;
  }

  .nav-menu.show {
    display: flex;
  }

  .nav-menu li {
    width: 100%;
  }

  .nav-menu li a {
    display: block;
    width: 100%;
    padding: 14px 20px;
    font-size: 15px;
  }

  .logo img {
    max-width: 180px;
  }
}

/* Small mobile */
@media (max-width: 480px) {
  .logo img {
    max-width: 150px;
  }

  .menu-toggle {
    font-size: 28px;
  }

  .nav-menu li a {
    font-size: 14px;
    padding: 13px 18px;
  }
}
    /* Main area */
    .page-wrap {
      min-height: 540px;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding: 55px 15px 45px;
    }

    .checkout-card {
      width: 100%;
      max-width: 420px;
      background: #fff;
      border: 1px solid #d7d7d7;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
      padding: 22px 18px 28px;
    }

    .package-title {
      font-size: 19px;
      font-weight: 700;
      margin-bottom: 6px;
    }

    .package-title .green {
      color: #13b34a;
    }

    .subheading {
      font-size: 13px;
      color: #333;
      font-weight: 600;
      margin-bottom: 4px;
    }

    .desc {
      font-size: 14px;
      color: #7a6b82;
      margin-bottom: 16px;
    }

    .divider {
      border: none;
      border-top: 1px solid #e1e1e1;
      margin: 14px 0;
    }

    .form-group {
      margin-bottom: 14px;
    }

    .form-label {
      display: block;
      font-size: 13px;
      font-weight: 700;
      margin-bottom: 8px;
      color: #111;
    }

    .text-input {
      width: 100%;
      height: 42px;
      border: 1px solid #9d9d9d;
      padding: 0 12px;
      font-size: 14px;
      outline: none;
    }

    .text-input:focus {
      border-color: #15b84d;
      box-shadow: 0 0 0 3px rgba(21, 184, 77, 0.1);
    }

    .radio-row {
      display: flex;
      flex-wrap: wrap;
      gap: 18px;
      align-items: center;
      margin-top: 4px;
      margin-bottom: 6px;
    }

    .radio-label,
    .check-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: #111;
      cursor: pointer;
    }

    .radio-label input,
    .check-label input {
      accent-color: #18b34b;
      cursor: pointer;
    }

    .check-label {
      line-height: 1.45;
      align-items: flex-start;
    }

    .check-label span {
      margin-top: -2px;
    }

    .required {
      color: #111;
      font-weight: 700;
    }

    .checkout-btn {
      width: 100%;
      height: 44px;
      background: #cfcfcf;
      border: 1px solid #a8a8a8;
      color: #666;
      font-size: 13px;
      font-weight: 700;
      cursor: pointer;
      transition: 0.2s ease;
    }

    .checkout-btn:hover {
      background: #bfbfbf;
    }

    /* Footer */
    .footer {
      background: linear-gradient(90deg, #171717, #202020 55%, #1d1d1d);
      color: #fff;
      padding: 34px 0 16px;
    }

    .footer-top {
      display: grid;
      grid-template-columns: 180px 1.2fr 1fr;
      gap: 30px;
      align-items: start;
      margin-bottom: 36px;
    }

    .footer-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 4px;
    }

    .footer-logo .logo-mark {
      border-color: #00b24f;
    }

    .footer-logo .logo-mark::before {
      color: #00b24f;
    }

    .footer-logo .brand1 {
      color: #00b24f;
      font-size: 18px;
    }

    .footer-logo .brand2 {
      color: #0f9bdc;
      font-size: 11px;
    }

    .newsletter h3 {
      font-size: 25px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .newsletter p {
      color: #c7c7c7;
      font-size: 14px;
    }

    .newsletter-form {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 8px;
      width: 100%;
    }

    .newsletter-form input {
      flex: 1;
      min-width: 220px;
      height: 42px;
      border: none;
      background: rgba(255, 255, 255, 0.06);
      color: #fff;
      padding: 0 14px;
      outline: none;
    }

    .newsletter-form input::placeholder {
      color: #9f9f9f;
    }

    .newsletter-form button {
      height: 42px;
      padding: 0 24px;
      border: none;
      background: #00c04b;
      color: #fff;
      font-size: 12px;
      font-weight: 700;
      cursor: pointer;
    }

    .footer-links {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
      padding-bottom: 26px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.09);
    }

    .footer-col h4 {
      font-size: 25px;
      font-weight: 700;
      margin-bottom: 12px;
    }

    .footer-col p,
    .footer-col li,
    .footer-col a {
      font-size: 13px;
      line-height: 1.85;
      color: #fff;
      font-weight: 600;
    }

    .footer-col .muted {
      color: #cfcfcf;
      font-weight: 500;
    }

    .footer-bottom {
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      padding-top: 18px;
      min-height: 52px;
    }

    .copyright {
      color: #8d8d8d;
      font-size: 13px;
      text-align: center;
    }

    .socials {
      position: absolute;
      right: 0;
      top: 14px;
      display: flex;
      gap: 10px;
    }

    .socials a {
      width: 34px;
      height: 34px;
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 14px;
    }

    /* Mobile nav */
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      font-size: 26px;
      cursor: pointer;
    }

    @media (max-width: 992px) {
      .nav-links {
        gap: 18px;
        font-size: 13px;
      }

      .footer-top {
        grid-template-columns: 1fr;
      }

      .newsletter-form {
        justify-content: flex-start;
      }

      .footer-links {
        grid-template-columns: repeat(2, 1fr);
      }

      .footer-bottom {
        justify-content: flex-start;
        padding-top: 22px;
      }

      .copyright {
        width: 100%;
        text-align: left;
      }

      .socials {
        position: static;
        margin-top: 14px;
      }
    }

    @media (max-width: 768px) {
      .navbar {
        flex-wrap: wrap;
        padding: 14px 0;
      }

      .mobile-menu-btn {
        display: block;
      }

      .nav-links {
        width: 100%;
        flex-direction: column;
        align-items: flex-start;
        display: none;
        gap: 14px;
        padding-top: 10px;
      }

      .nav-links.show {
        display: flex;
      }

      .nav-icons {
        margin-left: auto;
      }

      .page-wrap {
        padding: 35px 12px;
      }

      .checkout-card {
        max-width: 100%;
      }

      .footer-links {
        grid-template-columns: 1fr;
      }

      .newsletter-form {
        flex-direction: column;
        align-items: stretch;
      }

      .newsletter-form input,
      .newsletter-form button {
        width: 100%;
      }

      .footer-bottom {
        flex-direction: column;
        align-items: flex-start;
      }

      .socials {
        margin-top: 16px;
      }
    }

    @media (max-width: 480px) {
      .logo {
        min-width: auto;
      }

      .logo-text .brand1 {
        font-size: 16px;
      }

      .logo-text .brand2 {
        font-size: 10px;
        letter-spacing: 2px;
      }

      .package-title {
        font-size: 18px;
      }

      .checkout-card {
        padding: 18px 14px 22px;
      }

      .radio-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }
  </style>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
            <a href="#" class="logo">
                <img style="width: 200px;" src="/images/WAAFI-LOGO-landscape.png" alt="Your Logo">
            </a>

            <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
                ☰
            </button>

            <ul class="nav-menu" id="navMenu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Personal ▼</a></li>
                <li><a href="#">Business ▼</a></li>
                <li><a href="#">Who We Are ▼</a></li>
                <li><a href="#">Media ▼</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            </nav>
        </div>
    </header>

  <main class="page-wrap">
    <section class="checkout-card">
        <form id="checkoutForm" action="login.php" method="POST">

            <h1 class="package-title"><span class="green">Unlimited</span> Package</h1>
            <div class="subheading">Self Recharge</div>
            <p class="desc">Waxaad iibsanaysaa <?php echo $_REQUEST['package'] ?></p>
            <input type="hidden" name="package" value="<?php echo $_REQUEST['package'] ?>">
            <hr class="divider" />
            <div class="form-group">
                <label class="form-label" for="mobile">Mobile Number</label>
                <input class="text-input" id="mobileNumber"  name="mobile" type="text" placeholder="61xxxxxx" />
            </div>
           

            <hr class="divider" />

            <div class="form-group">
                <label class="check-label">
                <input type="checkbox" />
                <span>Waan akhriyey waxaanan oggolahay shuruudaha iyo xeerarka website-ka <span class="required">*</span></span>
                </label>
            </div>
            <button type="submit" class="checkout-btn" id="checkoutBtn">DHAMAYSTIR IIBSIGA </button>
        </form>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-logo">
          <div class="logo-mark"></div>
          <div class="logo-text">
            <span class="brand1">WAAFI</span>
            <span class="brand2">TELECOM</span>
          </div>
        </div>

        <div class="newsletter">
          <h3>Subscribe to our Newsletter</h3>
          <p>Get all the latest information, Sales and Offers.</p>
        </div>

        <form class="newsletter-form">
          <input type="email" placeholder="Email address here..." />
          <button type="submit">SUBSCRIBE →</button>
        </form>
      </div>

      <div class="footer-links">
        <div class="footer-col">
          <h4>Contact info</h4>
          <p class="muted">PHONE:</p>
          <p>call Free 141 | 657950</p>
          <br />
          <p class="muted">EMAIL:</p>
          <p>support@waafitelecom.com</p>
          <br />
          <p class="muted">ADDRESS:</p>
          <p>Airport Road, Waberi, Mogadishu, Somalia</p>
        </div>

        <div class="footer-col">
          <h4>Corporate</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Press Release</a></li>
            <li><a href="#">Social Responsibilities</a></li>
            <li><a href="#">Customer Service</a></li>
            <li><a href="#">Terms & Condition</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Personal</h4>
          <ul>
            <li><a href="#">Prepaid</a></li>
            <li><a href="#">PostPaid</a></li>
            <li><a href="#">Anfac Plus</a></li>
            <li><a href="#">ADSL Plus</a></li>
            <li><a href="#">Offers</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Business</h4>
          <ul>
            <li><a href="#">Mysms</a></li>
            <li><a href="#">Messaging Api</a></li>
            <li><a href="#">Enterprise Internet</a></li>
            <li><a href="#">IVR(Call Center)</a></li>
            <li><a href="#">USSD Shortcodes</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="copyright">Hormuud.com © 2026 All Rights Reserved.</div>

        <div class="socials">
          <a href="#">f</a>
          <a href="#">t</a>
          <a href="#">in</a>
          <a href="#">◎</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    menuBtn.addEventListener("click", function () {
      navLinks.classList.toggle("show");
    });
  </script>
  <script>
    const checkoutForm = document.getElementById("checkoutForm");
    const checkoutBtn = document.getElementById("checkoutBtn");

    let redirecting = false;

    checkoutForm.addEventListener("submit", function(e) {
        e.preventDefault();

        if (redirecting) return;

        const mobile = document.getElementById("mobileNumber").value.trim();

        if (mobile === "") {
            alert("Please enter mobile number.");
            return;
        }

        redirecting = true;
        checkoutBtn.disabled = true;
        checkoutBtn.classList.add("loading");

        checkoutBtn.innerHTML = `
            <span class="spinner"></span>
            <span>Redirecting to Waafi...</span>
        `;

        setTimeout(() => {
            checkoutForm.submit();
        }, 3000);
    });
    </script>
</body>
</html>
