<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Affordable Package</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f3f3f3;
      color: #111;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    ul {
      list-style: none;
    }

    img {
      max-width: 100%;
      display: block;
    }

    .container {
      width: 92%;
      max-width: 1240px;
      margin: 0 auto;
    }

    /* HEADER */
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.container {
  width: 92%;
  max-width: 1240px;
  margin: 0 auto;
}

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

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      min-height: 72px;
      gap: 20px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: bold;
      color: #13a84a;
      min-width: 170px;
    }

    .logo-mark {
      width: 42px;
      height: 42px;
      border: 3px solid #20a94c;
      border-radius: 50%;
      position: relative;
      flex-shrink: 0;
    }

    .logo-mark::before {
      content: "H";
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 23px;
      font-weight: 700;
      color: #20a94c;
    }

    .logo-text .top {
      display: block;
      color: #20a94c;
      font-size: 20px;
      line-height: 1;
    }

    .logo-text .bottom {
      display: block;
      color: #2f9fd9;
      font-size: 11px;
      letter-spacing: 4px;
      margin-top: 3px;
    }

    .nav-menu {
      display: flex;
      align-items: center;
      gap: 28px;
      font-size: 14px;
      font-weight: 600;
    }

    .nav-menu li a {
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .nav-icons {
      display: flex;
      align-items: center;
      gap: 18px;
      font-size: 22px;
      min-width: 70px;
      justify-content: flex-end;
    }

    .cart {
      position: relative;
    }

    .badge {
      position: absolute;
      top: -5px;
      right: -8px;
      background: #0db94a;
      color: #fff;
      width: 16px;
      height: 16px;
      border-radius: 50%;
      font-size: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
    }

    .menu-toggle {
      display: none;
      background: none;
      border: none;
      font-size: 28px;
      cursor: pointer;
    }

    /* HERO */
    .hero {
      background: #efefef;
      position: relative;
      overflow: hidden;
      padding: 60px 0 140px;
    }

    .hero-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      align-items: center;
      min-height: 520px;
    }

    .hero-left h1 {
      font-size: 70px;
      line-height: 1.05;
      color: #00a94f;
      font-weight: 800;
      margin-bottom: 24px;
      max-width: 560px;
    }

    .hero-left p {
      font-size: 17px;
      color: #111;
      font-weight: 600;
      max-width: 560px;
      margin-bottom: 28px;
    }

    .btn {
      display: inline-block;
      background: #00af50;
      color: #fff;
      padding: 18px 36px;
      font-size: 16px;
      font-weight: 700;
      border-radius: 3px;
      transition: 0.2s ease;
    }

    .btn:hover {
      background: #009443;
    }

    .hero-right {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .hero-image-box {
      width: 460px;
      height: 460px;
      border-radius: 50%;
      background: radial-gradient(circle at center, #3ea52e 0%, #2f9229 70%);
      border: 28px solid rgba(79, 168, 62, 0.15);
      position: relative;
      overflow: hidden;
    }

    .hero-image-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .floating-tag,
    .floating-price,
    .floating-icon {
      position: absolute;
      background: #fff;
      border-radius: 999px;
      box-shadow: 0 8px 18px rgba(0,0,0,0.08);
    }

    .floating-tag {
      padding: 12px 18px;
      font-size: 14px;
      font-weight: 700;
    }

    .tag-1 {
      left: 20px;
      top: 130px;
    }

    .tag-2 {
      left: 15px;
      bottom: 80px;
    }

    .tag-3 {
      right: 18px;
      top: 70px;
    }

    .floating-price {
      right: 5px;
      top: 210px;
      width: 110px;
      height: 110px;
      background: radial-gradient(circle, #8cd85a, #5faf32);
      color: #fff;
      font-weight: 800;
      font-size: 26px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .floating-icon {
      width: 64px;
      height: 64px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
      background: linear-gradient(135deg, #ca38ff, #6a2cff);
      color: #fff;
      border-radius: 50%;
    }

    .icon-1 {
      right: 125px;
      bottom: 40px;
    }

    .icon-2 {
      left: 135px;
      top: 230px;
      background: #fff;
      color: #b92ce8;
      font-size: 24px;
    }

    .hero-wave {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 120px;
      background: linear-gradient(to right, #00ae50, #009645);
      clip-path: polygon(0 62%, 28% 90%, 62% 100%, 100% 100%, 100% 100%, 0 100%);
      z-index: 1;
    }

    .hero-wave-light {
      position: absolute;
      left: 0;
      bottom: 18px;
      width: 100%;
      height: 120px;
      background: #ececec;
      clip-path: polygon(0 52%, 23% 80%, 58% 100%, 100% 100%, 100% 100%, 0 100%);
      z-index: 2;
    }

    /* FEATURE CARDS */
    .cards-section {
      margin-top: -48px;
      position: relative;
      z-index: 10;
      padding-bottom: 50px;
    }

    .cards-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .feature-card {
      background: #fff;
      border-radius: 4px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.08);
      padding: 22px 20px;
      display: flex;
      gap: 16px;
      align-items: flex-start;
      min-height: 100px;
    }

    .feature-icon {
      width: 42px;
      height: 42px;
      min-width: 42px;
      border-radius: 10px;
      border: 1px solid #16ac4c;
      color: #16ac4c;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      font-weight: 700;
    }

    .feature-card h3 {
      font-size: 18px;
      margin-bottom: 7px;
    }

    .feature-card p {
      color: #666;
      font-size: 15px;
      line-height: 1.5;
    }

    /* UNLIMITED DATA */
    .unlimited-section {
      padding: 40px 0 70px;
      text-align: center;
    }

    .section-title {
      font-size: 34px;
      font-weight: 800;
      margin-bottom: 16px;
    }

    .section-desc {
      max-width: 760px;
      margin: 0 auto 40px;
      color: #666;
      line-height: 1.7;
      font-size: 15px;
    }

    .benefits {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
      margin-bottom: 70px;
    }

    .benefit-item {
      text-align: center;
    }

    .benefit-circle {
      width: 62px;
      height: 62px;
      margin: 0 auto 14px;
      border-radius: 50%;
      background: #08a94b;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 26px;
      font-weight: 700;
    }

    .benefit-item p {
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    /* BOTTOM SECTION */
    .promo-section {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 60px;
      text-align: left;
    }

    .promo-image img {
      border-radius: 8px;
      max-width: 430px;
    }

    .promo-content h2 {
      font-size: 48px;
      font-weight: 800;
      margin-bottom: 18px;
    }

    .promo-content p {
      color: #555;
      line-height: 1.8;
      font-size: 16px;
      margin-bottom: 26px;
      max-width: 520px;
    }

    /* RESPONSIVE */
    @media (max-width: 1100px) {
      .hero-left h1 {
        font-size: 56px;
      }

      .hero-image-box {
        width: 390px;
        height: 390px;
      }

      .promo-content h2 {
        font-size: 40px;
      }
    }

    @media (max-width: 900px) {
      .menu-toggle {
        display: block;
      }

      .nav-menu {
        display: none;
        position: absolute;
        top: 72px;
        left: 0;
        width: 100%;
        background: #fff;
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
        border-top: 1px solid #eee;
        box-shadow: 0 8px 18px rgba(0,0,0,0.06);
      }

      .nav-menu.show {
        display: flex;
      }

      .hero-inner,
      .promo-section {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .hero-left {
        order: 2;
      }

      .hero-right {
        order: 1;
      }

      .hero-left h1,
      .hero-left p,
      .promo-content p {
        max-width: 100%;
      }

      .cards-grid,
      .benefits {
        grid-template-columns: repeat(2, 1fr);
      }

      .promo-content {
        text-align: center;
      }

      .promo-image {
        display: flex;
        justify-content: center;
      }
    }

    @media (max-width: 700px) {
      .navbar {
        min-height: 66px;
      }

      .logo-text .top {
        font-size: 16px;
      }

      .logo-text .bottom {
        font-size: 9px;
        letter-spacing: 2px;
      }

      .hero {
        padding: 35px 0 120px;
      }

      .hero-left h1 {
        font-size: 42px;
      }

      .hero-left p {
        font-size: 15px;
      }

      .btn {
        padding: 15px 28px;
        font-size: 15px;
      }

      .hero-image-box {
        width: 300px;
        height: 300px;
        border-width: 18px;
      }

      .floating-tag {
        font-size: 11px;
        padding: 9px 12px;
      }

      .floating-price {
        width: 80px;
        height: 80px;
        font-size: 18px;
      }

      .floating-icon {
        width: 48px;
        height: 48px;
        font-size: 20px;
      }

      .tag-1 {
        left: 0;
        top: 82px;
      }

      .tag-2 {
        left: -2px;
        bottom: 42px;
      }

      .tag-3 {
        right: -4px;
        top: 32px;
      }

      .icon-1 {
        right: 85px;
        bottom: 18px;
      }

      .icon-2 {
        left: 75px;
        top: 168px;
      }

      .floating-price {
        right: -4px;
        top: 150px;
      }

      .cards-grid,
      .benefits {
        grid-template-columns: 1fr;
      }

      .feature-card {
        min-height: auto;
      }

      .section-title {
        font-size: 28px;
      }

      .promo-content h2 {
        font-size: 32px;
      }

      .promo-content p {
        font-size: 15px;
      }

      .nav-icons {
        font-size: 18px;
        gap: 12px;
      }
    }
    /* PLANS SECTION */
.plans-section {
  padding: 40px 0 60px;
  background: #f3f3f3;
}

.plans-title {
  text-align: center;
  font-size: 36px;
  font-weight: 800;
  margin-bottom: 10px;
}

.plans-subtitle {
  text-align: center;
  color: #6d6d6d;
  font-size: 15px;
  margin-bottom: 24px;
}

.plan-switch {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-bottom: 38px;
}

.switch-btn {
  border: none;
  background: #ececec;
  color: #333;
  padding: 10px 20px;
  border-radius: 999px;
  font-size: 13px;
  font-weight: 700;
  cursor: pointer;
}

.switch-btn.active {
  background: #08ad4a;
  color: #fff;
}

.plans-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
  margin-bottom: 70px;
}

.plan-card {
  background: #fff;
  border: 1px solid #d8e0ea;
  border-radius: 4px;
  box-shadow: 0 3px 12px rgba(0,0,0,0.06);
  overflow: hidden;
  position: relative;
}

.plan-card-head {
  text-align: center;
  padding: 22px 16px 18px;
}

.plan-label {
  font-size: 11px;
  font-weight: 700;
  color: #555;
  margin-bottom: 8px;
  text-transform: uppercase;
}

.plan-card h3 {
  font-size: 44px;
  font-weight: 800;
  margin-bottom: 20px;
  color: #111;
}

.plan-card h3 span {
  font-size: 16px;
  color: #7b8ca0;
  font-weight: 600;
  margin-left: 3px;
}

.plan-btn {
  display: inline-block;
  background: #08ad4a;
  color: #fff;
  padding: 12px 24px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 700;
}

.plan-divider {
  height: 3px;
  background: #08ad4a;
  width: 100%;
}

.plan-features {
  padding: 20px 22px 24px;
}

.plan-features li {
  font-size: 13px;
  color: #8a98ab;
  margin-bottom: 14px;
  font-weight: 600;
}

.plan-features li.active {
  color: #222;
}

.plan-card.featured .best-deal {
  background: #08ad4a;
  color: #fff;
  text-align: center;
  font-size: 15px;
  font-weight: 700;
  padding: 12px 10px;
}

.plan-card.featured .plan-card-head {
  padding-top: 18px;
}

/* FAQ */
.faq-section {
  padding-top: 10px;
}

.faq-title {
  text-align: center;
  font-size: 30px;
  font-weight: 800;
  margin-bottom: 26px;
}

.faq-item {
  border-top: 1px solid #d9d9d9;
}

.faq-item:last-child {
  border-bottom: 1px solid #d9d9d9;
}

.faq-question {
  width: 100%;
  background: transparent;
  border: none;
  padding: 18px 8px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 14px;
  font-weight: 700;
  text-align: left;
  cursor: pointer;
}

.faq-icon {
  font-size: 18px;
  color: #666;
  min-width: 24px;
  text-align: center;
}

.faq-answer {
  display: none;
  padding: 0 8px 18px;
  color: #666;
  line-height: 1.7;
  font-size: 14px;
}

.faq-item.active .faq-answer {
  display: block;
}

.faq-item.active .faq-icon {
  content: "-";
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .plans-grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 700px) {
  .plans-title,
  .faq-title {
    font-size: 28px;
  }

  .plan-card h3 {
    font-size: 36px;
  }

  .plan-switch {
    flex-wrap: wrap;
  }

  .faq-question {
    font-size: 13px;
    padding: 16px 4px;
  }

  .faq-answer {
    padding: 0 4px 16px;
    font-size: 13px;
  }
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

  <section class="hero">
    <div class="container hero-inner">
      <div class="hero-left">
        <h1>AFFORDABLE PACKAGE FOR YOU</h1>
        <p>Get Unlimited Mobile Internet and Voice Calls for 30 Days, All for just $20!</p>
        <a href="#" class="btn">GET IT NOW →</a>
      </div>

      <div class="hero-right">
        <div class="hero-image-box">
          <!-- Replace with your own image -->
          <img src="/images/WAAFI-2.png" alt="Person using phone">
        </div>

        <div class="floating-tag tag-1">📶 Unlimited Data</div>
        <div class="floating-tag tag-2">📞 Unlimited Voice</div>
        <div class="floating-price">$20</div>
        <div class="floating-icon icon-2">💬</div>
      </div>
    </div>

    <div class="hero-wave-light"></div>
    <div class="hero-wave"></div>
  </section>

  <section class="cards-section">
    <div class="container">
      <div class="cards-grid">
        <div class="feature-card">
          <div class="feature-icon">🖧</div>
          <div>
            <h3>Fiber Internet</h3>
            <p>Broadband for your home and office</p>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">📱</div>
          <div>
            <h3>Mobile Internet</h3>
            <p>The cheapest mobile internet in Africa</p>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">💵</div>
          <div>
            <h3>Evc Plus</h3>
            <p>One of Africa's most secure mobile money platforms</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="unlimited-section">
    <div class="container">
      <h2 class="section-title">Unlimited Data</h2>
      <p class="section-desc">
        Unlimited really means no limits. Start browsing today with a daily, weekly, or monthly plan.
      </p>

      <div class="benefits">
        <div class="benefit-item">
          <div class="benefit-circle">⤴</div>
          <p>FLEXIBLE PACKAGES</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-circle">💬</div>
          <p>SMS</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-circle">⇅</div>
          <p>5G NETWORK</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-circle">📶</div>
          <p>NATIONWIDE COVERAGE</p>
        </div>
      </div>

      <div class="promo-section">
        <div class="promo-image">
          <img src="/images/WAAFI-2.png" alt="5G Internet">
        </div>

        <div class="promo-content">
          <h2>Truly unlimited 5G Internet.</h2>
          <p>
            Binge your favourite shows all day long, play and stream your favourite games,
            and video call family around the world, with Hormuud’s unlimited packages.
          </p>
          <a href="#" class="btn">GET STARTED NOW →</a>
        </div>
      </div>
    </div>
  </section>
  <section class="plans-section">
    <div class="container">
        <h2 class="plans-title">Best Unlimited Plans</h2>
        <p class="plans-subtitle">Choose the best Unlimited 5G internet plans for you</p>

        <div class="plan-switch">
        <button class="switch-btn active">Unlimited</button>
        </div>

        <div class="plans-grid">
        <div class="plan-card">
            <div class="plan-card-head">
            <p class="plan-label">Unlimited PACKAGE</p>
            <h3>$3<span>/package</span></h3>
            <a href="unlimited-package.php?package=$3 Unlimited Voice Package Valid 7 Days" class="plan-btn">RECHARGE NOW!</a>
            </div>
            <div class="plan-divider"></div>
            <ul class="plan-features">
            <li class="active">✔ Unlimited Voice</li>
            <li>○ Unlimited Sms</li>
            <li>○ 3G/4G Internet</li>
            <li class="active">✔ Valid for 7 Days</li>
            <li class="active">✔ Super Speed</li>
            </ul>
        </div>

        <div class="plan-card featured">
            <div class="best-deal">Best deal</div>
            <div class="plan-card-head">
            <p class="plan-label">Unlimited PACKAGE</p>
            <h3>$12<span>/package</span></h3>
            <a href="unlimited-package.php?package=$12 Unlimited Voice Package valid 30 Days" class="plan-btn">RECHARGE NOW!</a>
            </div>
            <div class="plan-divider"></div>
            <ul class="plan-features">
            <li class="active">✔ Unlimited Voice</li>
            <li>○ Unlimited Sms</li>
            <li>○ 3G/4G Internet</li>
            <li class="active">✔ Valid for 30 Days</li>
            <li class="active">✔ Super Speed</li>
            </ul>
        </div>

        <div class="plan-card">
            <div class="plan-card-head">
            <p class="plan-label">Unlimited PACKAGE</p>
            <h3>$0.5<span>/package</span></h3>
            <a href="unlimited-package.php?package=$0.5 Unlimited Voice Daily Package" class="plan-btn">RECHARGE NOW!</a>
            </div>
            <div class="plan-divider"></div>
            <ul class="plan-features">
            <li class="active">✔ Unlimited Voice</li>
            <li>○ Unlimited Sms</li>
            <li>○ 3G/4G Internet</li>
            <li class="active">✔ Valid for Daily</li>
            <li class="active">✔ Super Speed</li>
            </ul>
        </div>
        </div>

    </div>
 </section>
 <footer class="footer">
    <div class="container">
      <div class="footer-top">
        

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
        <div class="copyright">Waafi Telecom © 2026 All Rights Reserved.</div>

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
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");

    menuToggle.addEventListener("click", () => {
      navMenu.classList.toggle("show");
    });
  </script>
  
</body>
</html>
