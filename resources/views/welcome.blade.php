<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ultimate UPI — Payments Made Simpler</title>
    <!-- Favicon -->
     <link rel="icon"
      type="image/png"
      href="{{ asset('favicon.png') }}">
      <link rel="icon"
      type="image/png"
      href="/favicon-96x96.png"
      sizes="96x96">

<link rel="icon"
      type="image/svg+xml"
      href="/favicon.svg">

<link rel="shortcut icon"
      href="/favicon.ico">

<link rel="apple-touch-icon"
      sizes="180x180"
      href="/apple-touch-icon.png">

<meta name="apple-mobile-web-app-title"
      content="Ultimate UPI">

<link rel="manifest"
      href="/site.webmanifest">


    <meta name="description"
        content="Ultimate UPI — A simple, secure and powerful digital payment platform.">

    <style>
    .logo {
    width: 55px;
    height: 55px;

    border-radius: 50%;

    object-fit: cover;

    background: #ffffff;

    padding: 5px;
}
        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family:
                Inter,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                Arial,
                sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #f8fcff 0%,
                    #eef8ff 45%,
                    #e7f4ff 100%
                );

            color: #071542;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }


        /* =====================================================
           BACKGROUND
        ===================================================== */

        .background {
            position: fixed;
            inset: 0;
            z-index: -10;
            overflow: hidden;
            pointer-events: none;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: .45;
            animation: orbFloat 12s ease-in-out infinite alternate;
        }

        .orb-1 {
            width: 420px;
            height: 420px;
            background: #bde2ff;
            left: -160px;
            top: 100px;
        }

        .orb-2 {
            width: 350px;
            height: 350px;
            background: #d7d2ff;
            right: -100px;
            top: 300px;
            animation-delay: 2s;
        }

        .orb-3 {
            width: 300px;
            height: 300px;
            background: #c9edff;
            left: 40%;
            bottom: -150px;
            animation-delay: 4s;
        }

        @keyframes orbFloat {

            from {
                transform: translate(0, 0);
            }

            to {
                transform: translate(50px, -40px);
            }
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;

            width: 100%;

            z-index: 1000;

            padding: 14px 5%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: rgba(255, 255, 255, .70);

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border-bottom: 1px solid rgba(255,255,255,.8);

            box-shadow:
                0 5px 30px rgba(53, 117, 170, .05);
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;

            font-size: 30px;
            font-weight: 800;

            color: #071542;
        }

        .brand-logo {
            width: 50px;
            height: 52px;

            object-fit: contain;

            border-radius: 12px;

            box-shadow:
                0 8px 25px rgba(37, 99, 235, .15);
        }


        /* =====================================================
           NAVIGATION
        ===================================================== */

        .nav-links {
            display: flex;
            align-items: center;
            gap: 34px;
        }

        .nav-links a {
            position: relative;

            font-size: 14px;
            font-weight: 500;

            color: #394b78;

            transition: .3s;
        }

        .nav-links a:hover {
            color: #0866ff;
        }

        .nav-links a.active {
            color: #0866ff;
        }

        .nav-links a.active::after {
            content: "";

            position: absolute;

            left: 50%;
            bottom: -12px;

            transform: translateX(-50%);

            width: 22px;
            height: 2px;

            background: #0866ff;

            border-radius: 20px;
        }


        /* =====================================================
           NAV BUTTONS
        ===================================================== */

        .nav-buttons {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .login-btn {
            padding: 12px 25px;

            border-radius: 15px;

            background: rgba(255,255,255,.65);

            border: 1px solid rgba(180,210,240,.5);

            color: #071542;

            font-size: 14px;
            font-weight: 600;

            box-shadow:
                0 8px 25px rgba(60,120,170,.08);

            transition: .3s;
        }

        .login-btn:hover {
            transform: translateY(-2px);
        }

        .get-started {
            padding: 12px 24px;

            border-radius: 15px;

            color: white;

            font-size: 14px;
            font-weight: 700;

            background:
                linear-gradient(
                    135deg,
                    #2587ff,
                    #0765ed
                );

            box-shadow:
                0 12px 28px rgba(20,110,240,.25);

            transition: .3s;
        }

        .get-started:hover {
            transform: translateY(-3px);

            box-shadow:
                0 18px 35px rgba(20,110,240,.32);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            min-height: 100vh;

            padding:
                145px 5% 80px;

            display: grid;

            grid-template-columns:
                1fr 1fr;

            align-items: center;

            gap: 40px;

            position: relative;
        }


        /* =====================================================
           HERO CONTENT
        ===================================================== */

        .hero-content {
            animation:
                heroReveal 1s ease forwards;
        }

        @keyframes heroReveal {

            from {
                opacity: 0;
                transform: translateY(35px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* =====================================================
           BADGE
        ===================================================== */

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 8px 14px;

            border-radius: 30px;

            color: #0866ed;

            font-size: 13px;
            font-weight: 600;

            background:
                rgba(218,239,255,.75);

            border:
                1px solid rgba(170,215,255,.7);

            margin-bottom: 25px;
        }

        .badge-dot {
            width: 8px;
            height: 8px;

            border-radius: 50%;

            background: #2587ff;

            box-shadow:
                0 0 12px #2587ff;
        }


        /* =====================================================
           HERO TITLE
        ===================================================== */

        .hero h1 {
            font-size:
                clamp(55px, 6vw, 82px);

            line-height: .98;

            letter-spacing: -4px;

            max-width: 700px;

            color: #071542;

            margin-bottom: 25px;
        }

        .gradient-text {
            background:
                linear-gradient(
                    90deg,
                    #071542,
                    #2183ff,
                    #50a5ff
                );

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
        }


        /* =====================================================
           HERO DESCRIPTION
        ===================================================== */

        .hero-description {
            max-width: 580px;

            color: #586b96;

            font-size: 17px;

            line-height: 1.7;

            margin-bottom: 32px;
        }


        /* =====================================================
           HERO BUTTONS
        ===================================================== */

        .hero-buttons {
            display: flex;
            align-items: center;
            gap: 15px;

            margin-bottom: 50px;
        }

        .primary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;

            padding: 16px 27px;

            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    #2587ff,
                    #0666ed
                );

            color: white;

            font-size: 14px;
            font-weight: 700;

            box-shadow:
                0 14px 30px rgba(26,120,240,.25);

            transition: .3s;
        }

        .primary-btn:hover {
            transform: translateY(-4px);

            box-shadow:
                0 20px 40px rgba(26,120,240,.32);
        }

        .secondary-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            padding: 16px 25px;

            border-radius: 14px;

            background:
                rgba(255,255,255,.75);

            border:
                1px solid rgba(180,215,245,.7);

            color: #182750;

            font-size: 14px;
            font-weight: 650;

            backdrop-filter: blur(15px);

            transition: .3s;
        }

        .secondary-btn:hover {
            transform: translateY(-3px);

            background: white;
        }


        /* =====================================================
           TRUST POINTS
        ===================================================== */

        .trust-points {
            display: flex;
            gap: 28px;
        }

        .trust-point {
            display: flex;
            align-items: center;
            gap: 10px;

            color: #25375f;

            font-size: 13px;
            font-weight: 600;
        }

        .trust-icon {
            width: 32px;
            height: 32px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 10px;

            color: #086df2;

            background:
                rgba(205,232,255,.8);

            font-size: 17px;
        }


        /* =====================================================
           PHONE SECTION
        ===================================================== */

        .hero-phone-area {
            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 650px;
        }


        /* =====================================================
           PHONE
        ===================================================== */

        .phone {
            width: 305px;
            height: 590px;

            padding: 9px;

            border-radius: 43px;

            background:
                linear-gradient(
                    145deg,
                    #173b69,
                    #07182e
                );

            border:
                3px solid rgba(255,255,255,.8);

            box-shadow:
                0 45px 90px rgba(24,76,130,.25),
                0 0 0 8px rgba(255,255,255,.35);

            transform:
                rotate(4deg);

            animation:
                phoneFloat 5s ease-in-out infinite;

            z-index: 3;
        }

        @keyframes phoneFloat {

            0%,100% {
                transform:
                    translateY(0)
                    rotate(4deg);
            }

            50% {
                transform:
                    translateY(-16px)
                    rotate(2deg);
            }
        }

        .phone-screen {
            height: 100%;

            border-radius: 35px;

            overflow: hidden;

            padding: 25px 18px;

            background:
                linear-gradient(
                    180deg,
                    #f8fcff,
                    #eaf6ff
                );
        }

        .notch {
            width: 105px;
            height: 25px;

            margin:
                -25px auto 25px;

            border-radius:
                0 0 18px 18px;

            background: #07182e;
        }


        /* =====================================================
           PHONE HEADER
        ===================================================== */

        .phone-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 25px;
        }

        .phone-brand {
            display: flex;
            align-items: center;
            gap: 8px;

            font-size: 13px;
            font-weight: 800;
        }

        .phone-logo {
            width: 29px;
            height: 29px;

            border-radius: 8px;

            object-fit: contain;
        }

        .phone-time {
            font-size: 10px;
            font-weight: 700;
        }


        /* =====================================================
           BALANCE CARD
        ===================================================== */

        .balance-card {
            padding: 20px;

            border-radius: 18px;

            background:
                rgba(255,255,255,.72);

            border:
                1px solid rgba(255,255,255,.9);

            box-shadow:
                0 12px 30px rgba(60,120,170,.10);

            backdrop-filter: blur(15px);

            margin-bottom: 18px;
        }

        .balance-label {
            color: #7183a5;
            font-size: 10px;
            margin-bottom: 5px;
        }

        .balance {
            font-size: 27px;
            font-weight: 800;

            color: #071542;
        }

        .upi-id {
            color: #7183a5;
            font-size: 9px;
            margin-top: 4px;
        }


        /* =====================================================
           PHONE ACTIONS
        ===================================================== */

        .phone-actions {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 8px;

            margin-bottom: 18px;
        }

        .phone-action {
            text-align: center;

            color: #172955;

            font-size: 8px;
            font-weight: 600;
        }

        .action-icon {
            width: 39px;
            height: 39px;

            margin: auto auto 7px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 13px;

            color: #0872f4;

            background:
                rgba(209,235,255,.85);

            font-size: 17px;
        }


        /* =====================================================
           SCAN CARD
        ===================================================== */

        .scan-card {
            padding: 15px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-radius: 17px;

            background:
                linear-gradient(
                    135deg,
                    #dff2ff,
                    #cceaff
                );

            border:
                1px solid #c0e4ff;

            margin-bottom: 20px;
        }

        .scan-title {
            color: #0870ee;

            font-size: 13px;
            font-weight: 800;

            margin-bottom: 4px;
        }

        .scan-subtitle {
            color: #59769f;

            font-size: 8px;
        }

        .qr-icon {
            width: 45px;
            height: 45px;

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: white;

            color: #0870ee;

            font-size: 24px;
        }


        /* =====================================================
           TRANSACTIONS
        ===================================================== */

        .transactions-title {
            display: flex;
            justify-content: space-between;

            margin-bottom: 10px;

            font-size: 11px;
            font-weight: 800;
        }

        .transactions-title span {
            color: #0870ee;
            font-size: 9px;
        }

        .transaction {
            display: flex;
            align-items: center;

            padding: 8px 0;

            border-bottom:
                1px solid rgba(100,140,180,.10);
        }

        .transaction-icon {
            width: 30px;
            height: 30px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-right: 9px;

            background: #e0efff;

            font-size: 12px;
        }

        .transaction-info {
            flex: 1;
        }

        .transaction-name {
            font-size: 9px;
            font-weight: 700;
        }

        .transaction-date {
            color: #8998b5;
            font-size: 7px;
        }

        .transaction-amount {
            font-size: 9px;
            font-weight: 800;
        }

        .negative {
            color: #ef4444;
        }

        .positive {
            color: #16a34a;
        }


        /* =====================================================
           FLOATING GLASS CARDS
        ===================================================== */

        .floating-card {
            position: absolute;

            padding: 18px 20px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.72);

            backdrop-filter: blur(18px);

            border:
                1px solid rgba(255,255,255,.95);

            box-shadow:
                0 20px 45px rgba(65,120,165,.15);

            z-index: 5;

            animation:
                floatingCard 4s ease-in-out infinite;
        }

        @keyframes floatingCard {

            0%,100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        .secure-card {
            left: 0;
            top: 43%;
        }

        .scan-floating {
            right: 0;
            top: 25%;

            animation-delay: 1s;
        }

        .instant-floating {
            right: 2%;
            bottom: 15%;

            animation-delay: 1.7s;
        }

        .floating-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            color: #0872f4;

            background:
                #d9edff;

            margin-bottom: 8px;

            font-size: 20px;
        }

        .floating-card strong {
            display: block;

            color: #092051;

            font-size: 14px;
        }

        .floating-card small {
            color: #6980a8;

            font-size: 10px;
        }

/* =====================================================
   TRUSTED NETWORK
===================================================== */

.trusted-network {
    width: 100%;
    max-width: 100%;

    padding: 45px 4% 45px;

    box-sizing: border-box;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #f4fbff 0%,
            #edf8ff 50%,
            #f3f5ff 100%
        );
}


/* HEADING */

.trusted-heading {
    width: 100%;
    max-width: 750px;

    margin: 0 auto 30px;

    text-align: center;
}

.trusted-label {
    display: block;

    margin-bottom: 7px;

    color: #6482aa;

    font-size: 13px;

    font-weight: 600;

    letter-spacing: 1px;
}

.trusted-heading h2 {
    margin: 0 0 7px;

    color: #132650;

    font-size: 38px;

    line-height: 1.15;
}

.trusted-heading h2 span {
    color: #2681ed;
}

.trusted-heading p {
    margin: 0;

    color: #7187a8;

    font-size: 13px;
}


/* =====================================================
   FOUR LOGO CARDS
===================================================== */

.trusted-grid {
    width: 100%;
    max-width: 1250px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        repeat(4, minmax(0, 1fr));

    gap: 14px;

    box-sizing: border-box;
}


/* CARD */

.trusted-card {
    width: 100%;
    min-width: 0;

    height: 145px;

    padding: 15px;

    box-sizing: border-box;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    text-align: center;

    border-radius: 20px;

    background:
        rgba(255, 255, 255, 0.62);

    border:
        1px solid rgba(255, 255, 255, 0.95);

    box-shadow:
        0 10px 30px
        rgba(70, 125, 175, 0.08);

    backdrop-filter:
        blur(15px);

    -webkit-backdrop-filter:
        blur(15px);

    overflow: hidden;
}


/* =====================================================
   LOGO AREA
===================================================== */

.trusted-logo {
    width: 150px;
    height: 70px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    margin-bottom: 7px;

    overflow: hidden;
}


/* ALL LOGO IMAGES */

.trusted-logo img {
    display: block;

    width: auto;
    height: auto;

    max-width: 120%;
    max-height: 125%;

    object-fit: contain;
}


/* UPI */

.logo-upi img {
    width: 80px;

    max-height: 70px;
}


/* NPCI */

.logo-npci img {
    width: 120px;

    max-height: 60px;
}


/* RBI */

.logo-rbi img {
    width: 90px;

    max-height: 65px;
}


/* =====================================================
   SECURITY
===================================================== */

.logo-secure {
    width: 60px;
    height: 60px;

    margin-bottom: 10px;
}

.secure-shield {
    width: 48px;
    height: 48px;

    position: relative;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 13px;

    background:
        linear-gradient(
            145deg,
            #2789f5,
            #0864d5
        );

    color: white;

    font-size: 22px;

    font-weight: 800;

    /* box-shadow:
        0 7px 18px
        rgba(20, 110, 230, 0.22); */
}


/* CARD TEXT */

.trusted-card p {
    width: 100%;

    margin: 0;

    color: #607a9d;

    font-size: 14px;

    font-weight: 600;

    line-height: 1.35;

    text-align: center;
}


/* =====================================================
   TABLET
===================================================== */

@media (max-width: 850px) {

    .trusted-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 500px) {

    .trusted-network {
        padding: 40px 15px;
    }

    .trusted-heading h2 {
        font-size: 30px;
    }

    .trusted-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 10px;
    }

    .trusted-card {
        height: 125px;

        padding: 10px;
    }

    .trusted-logo {
        width: 110px;
        height: 55px;
    }

    .logo-upi img {
        width: 65px;
    }

    .logo-npci img {
        width: 90px;
    }

    .logo-rbi img {
        width: 60px;
    }

    .trusted-card p {
        font-size: 9px;
    }

    .logo-secure {
        width: 50px;
        height: 50px;
    }

    .secure-shield {
        width: 42px;
        height: 42px;
    }

}
        /* =====================================================
           FEATURES
        ===================================================== */

        .features {
            padding: 110px 5%;

            background:
                linear-gradient(
                    180deg,
                    rgba(255,255,255,.30),
                    rgba(226,244,255,.55)
                );
        }

        .section-heading {
            text-align: center;

            max-width: 700px;

            margin:
                0 auto 60px;
        }

        .section-label {
            display: inline-block;

            padding: 7px 17px;

            border-radius: 30px;

            color: #0871ee;

            background:
                rgba(207,235,255,.75);

            font-size: 11px;
            font-weight: 800;

            letter-spacing: 1px;

            margin-bottom: 15px;
        }

        .section-heading h2 {
            font-size:
                clamp(35px, 4vw, 55px);

            line-height: 1.1;

            letter-spacing: -2px;

            margin-bottom: 15px;
        }

        .section-heading p {
            color: #65799f;

            line-height: 1.7;
        }


        /* =====================================================
           FEATURE GRID
        ===================================================== */

        .feature-grid {
            max-width: 1150px;

            margin: auto;

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;
        }

        .feature-card {
            min-height: 250px;

            padding: 30px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.58);

            backdrop-filter:
                blur(20px);

            border:
                1px solid rgba(255,255,255,.9);

            box-shadow:
                0 15px 45px rgba(55,110,155,.08);

            transition: .4s;
        }

        .feature-card:hover {
            transform: translateY(-10px);

            box-shadow:
                0 25px 55px rgba(55,110,155,.15);
        }

        .feature-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 17px;

            background:
                #dceeff;

            color: #0871ee;

            font-size: 25px;

            margin-bottom: 25px;
        }

        .feature-card h3 {
            font-size: 18px;

            margin-bottom: 12px;
        }

        .feature-card p {
            color: #667ba1;

            font-size: 13px;

            line-height: 1.7;
        }


        /* =====================================================
           CTA
        ===================================================== */

        .cta-section {
            padding: 90px 5%;
        }

        .cta-box {
            max-width: 1150px;

            min-height: 290px;

            margin: auto;

            padding: 55px;

            border-radius: 30px;

            position: relative;

            overflow: hidden;

            background:
                linear-gradient(
                    120deg,
                    rgba(255,255,255,.75),
                    rgba(221,242,255,.78)
                );

            border:
                1px solid rgba(255,255,255,.95);

            box-shadow:
                0 25px 70px rgba(55,110,155,.12);
        }

        .cta-box h2 {
            font-size:
                clamp(35px, 4vw, 55px);

            letter-spacing: -2px;

            margin-bottom: 12px;
        }

        .cta-box h2 span {
            color: #0871ee;
        }

        .cta-box p {
            color: #60769c;

            margin-bottom: 28px;
        }

        .cta-decoration {
            position: absolute;

            width: 300px;
            height: 300px;

            right: -70px;
            top: -80px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(130,201,255,.5),
                    transparent 65%
                );
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            padding: 35px 5%;

            display: flex;

            justify-content: space-between;
            align-items: center;

            border-top:
                1px solid rgba(160,200,230,.25);

            color: #60749a;

            font-size: 12px;
        }

        .footer-brand {
            display: flex;
            align-items: center;

            gap: 10px;
        }

        .footer-logo {
            width: 38px;
            height: 38px;

            object-fit: contain;

            border-radius: 10px;
        }

        .footer-brand strong {
            display: block;

            color: #0b1b48;

            font-size: 15px;
        }

        .footer-brand span {
            font-size: 10px;
        }

        .footer-links {
            display: flex;
            gap: 25px;
        }

        .footer-links a:hover {
            color: #0871ee;
        }


        /* =====================================================
           SCROLL ANIMATION
        ===================================================== */

        .reveal {
            opacity: 0;

            transform:
                translateY(35px);

            transition:
                opacity .8s ease,
                transform .8s ease;
        }

        .reveal.active {
            opacity: 1;

            transform:
                translateY(0);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width: 1050px) {

            .nav-links {
                gap: 20px;
            }

            .feature-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .hero-phone-area {
                transform: scale(.9);
            }
        }


        @media(max-width: 850px) {

            .nav-links {
                display: none;
            }

            .hero {
                grid-template-columns: 1fr;

                text-align: center;

                padding-top: 130px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .trust-points {
                justify-content: center;
            }

            .hero-phone-area {
                margin-top: 20px;
            }

            .secure-card {
                left: 5%;
            }

            .scan-floating {
                right: 5%;
            }
        }


        @media(max-width: 600px) {

            .navbar {
                padding:
                    12px 5%;
            }

            .brand {
                font-size: 18px;
            }

            .brand-logo {
                width: 37px;
                height: 37px;
            }

            .login-btn {
                display: none;
            }

            .get-started {
                padding:
                    10px 15px;
            }

            .hero {
                padding-left: 5%;
                padding-right: 5%;
            }

            .hero h1 {
                font-size: 48px;
                letter-spacing: -2px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .primary-btn,
            .secondary-btn {
                width: 100%;
            }

            .trust-points {
                flex-wrap: wrap;
                gap: 15px;
            }

            .hero-phone-area {
                min-height: 590px;
                transform: scale(.8);
                margin-left: -30px;
                margin-right: -30px;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

            .cta-box {
                padding: 35px 25px;
            }

            footer {
                flex-direction: column;
                gap: 25px;
                text-align: center;
            }

            .trusted-items {
                gap: 25px;
            }
        }

    </style>
</head>


<body>


<!-- =====================================================
     BACKGROUND
===================================================== -->

<div class="background">

    <div class="orb orb-1"></div>

    <div class="orb orb-2"></div>

    <div class="orb orb-3"></div>

</div>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar">


    <a href="/" class="brand">

        <img
            src="{{ asset('images/logo.png') }}"
            class="brand-logo"
            alt="Ultimate UPI Logo"
        >

        <span>
            Ultimate UPI
        </span>

    </a>


    <div class="nav-links">

        <a href="/" class="active">
            Home
        </a>

        <a href="#features">
            Features
        </a>

        <a href="#security">
            Security
        </a>

        <a href="#about">
            About
        </a>

        <a href="#support">
            Support
        </a>

    </div>


    <div class="nav-buttons">

        <a href="{{ url('/login') }}" class="login-btn">
            Login
        </a>

        <a href="{{ url('/get-started') }}" class="get-started">
            Get Started
        </a>

    </div>

</nav>



<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">


    <div class="hero-content">


        <div class="badge">

            <span class="badge-dot"></span>

            India's Trusted UPI Payment Platform

        </div>


        <h1>

            Payments

            <br>

            Made

            <span class="gradient-text">
                Simpler
            </span>

        </h1>


        <p class="hero-description">

            Send money, pay bills, scan QR codes and manage
            your transactions — all in one secure and powerful
            payment platform.

        </p>


        <div class="hero-buttons">

            <a href="{{ url('/get-started') }}" class="primary-btn">

                Get Started

                <span>
                    →
                </span>

            </a>


        </div>


        <div class="trust-points">


            <div class="trust-point">

                <div class="trust-icon">
                    ⚡
                </div>

                <span>
                    Instant<br>
                    Transfers
                </span>

            </div>


            <div class="trust-point">

                <div class="trust-icon">
                    🛡
                </div>

                <span>
                    Bank-Grade<br>
                    Security
                </span>

            </div>


            <div class="trust-point">

                <div class="trust-icon">
                    ♙
                </div>

                <span>
                    Trusted by<br>
                    Millions
                </span>

            </div>


        </div>

    </div>



    <!-- =================================================
         PHONE
    ================================================= -->

    <div class="hero-phone-area">


        <div class="phone">


            <div class="phone-screen">


                <div class="notch"></div>


                <div class="phone-header">


                    <div class="phone-brand">

                        <img
                            src="{{ asset('images/logo.png') }}"
                            class="phone-logo"
                            alt="Ultimate UPI"
                        >

                        Ultimate UPI

                    </div>


                    <span class="phone-time">
                        9:41
                    </span>

                </div>


                <!-- Balance -->

                <div class="balance-card">

                    <div class="balance-label">
                        Available Balance
                    </div>

                    <div class="balance">
                        ₹24,580.00
                    </div>

                    <div class="upi-id">
                        user@ultimateupi
                    </div>

                </div>


                <!-- Actions -->

                <div class="phone-actions">


                    <div class="phone-action">

                        <div class="action-icon">
                            ↗
                        </div>

                        Send

                    </div>


                    <div class="phone-action">

                        <div class="action-icon">
                            ↓
                        </div>

                        Receive

                    </div>


                    <div class="phone-action">

                        <div class="action-icon">
                            ⌗
                        </div>

                        Scan

                    </div>


                    <div class="phone-action">

                        <div class="action-icon">
                            ◉
                        </div>

                        History

                    </div>


                </div>


                <!-- Scan -->

                <div class="scan-card">


                    <div>

                        <div class="scan-title">
                            Scan & Pay
                        </div>

                        <div class="scan-subtitle">
                            at any UPI enabled store
                        </div>

                    </div>


                    <div class="qr-icon">
                        ▦
                    </div>


                </div>


                <!-- Transactions -->

                <div class="transactions-title">

                    <span>
                        Recent Transactions
                    </span>

                    <span>
                        View All
                    </span>

                </div>


                <div class="transaction">


                    <div class="transaction-icon">
                        A
                    </div>


                    <div class="transaction-info">

                        <div class="transaction-name">
                            Amazon
                        </div>

                        <div class="transaction-date">
                            20 Sep 2026
                        </div>

                    </div>


                    <div class="transaction-amount negative">
                        - ₹799
                    </div>

                </div>


                <div class="transaction">


                    <div class="transaction-icon">
                        ↗
                    </div>


                    <div class="transaction-info">

                        <div class="transaction-name">
                            Rahul Sharma
                        </div>

                        <div class="transaction-date">
                            19 Sep 2026
                        </div>

                    </div>


                    <div class="transaction-amount positive">
                        + ₹2,000
                    </div>

                </div>


                <div class="transaction">


                    <div class="transaction-icon">
                        ⚡
                    </div>


                    <div class="transaction-info">

                        <div class="transaction-name">
                            Electricity Bill
                        </div>

                        <div class="transaction-date">
                            18 Sep 2026
                        </div>

                    </div>


                    <div class="transaction-amount negative">
                        - ₹1,250
                    </div>

                </div>


            </div>

        </div>



        <!-- Floating cards -->


        <div class="floating-card secure-card">

            <div class="floating-icon">
                🛡
            </div>

            <strong>
                100% Secure
            </strong>

            <small>
                Transactions
            </small>

        </div>


        <div class="floating-card scan-floating">

            <div class="floating-icon">
                ▦
            </div>

            <strong>
                Scan
            </strong>

            <small>
                Pay Cashless
            </small>

        </div>


        <div class="floating-card instant-floating">

            <div class="floating-icon">
                ⚡
            </div>

            <strong>
                Instant
            </strong>

            <small>
                Money Transfers
            </small>

        </div>


    </div>

</section>

<!-- =====================================================
     TRUSTED NETWORK
===================================================== -->

<<!-- =====================================================
     TRUSTED NETWORK
===================================================== -->

<section class="trusted-network">

    <div class="trusted-heading">

        <span class="trusted-label">
            TRUSTED. SECURE. SIMPLE.
        </span>

        <h2>
            Built for <span>Secure Payments</span>
        </h2>

        <p>
            Powered by India's trusted digital payment ecosystem.
        </p>

    </div>


    <div class="trusted-grid">

        <!-- UPI -->
        <div class="trusted-card">

            <div class="trusted-logo logo-upi">
                <img
                    src="{{ asset('images/upi.png') }}"
                    alt="UPI Logo"
                >
            </div>

            <p>
                Unified Payments Interface
            </p>

        </div>


        <!-- NPCI -->
        <div class="trusted-card">

            <div class="trusted-logo logo-npci">
                <img
                    src="{{ asset('images/npci.png') }}"
                    alt="NPCI Logo"
                >
            </div>

            <p>
                National Payments Corporation of India
            </p>

        </div>


        <!-- RBI -->
        <div class="trusted-card">

            <div class="trusted-logo logo-rbi">
                <img
                    src="{{ asset('images/rbi.png') }}"
                    alt="RBI Logo"
                >
            </div>

            <p>
                Reserve Bank of India
            </p>

        </div>


        <!-- SECURITY -->
        <div class="trusted-card">

            <div class="trusted-logo logo-secure">

                <div class="secure-shield">
                    <img
                    src="{{ asset('images/secure.png') }}"
                    alt="Secure Logo"
                >
                </div>

            </div>

            <p>
                100% Secure
            </p>

        </div>

    </div>

</section>
<!-- =====================================================
     FEATURES
===================================================== -->

<section
    class="features"
    id="features"
>


    <div class="section-heading reveal">


        <div class="section-label">
            FEATURES
        </div>


        <h2>
            Everything You Need
            for Digital Payments
        </h2>


        <p>
            A faster, safer and smarter way to handle
            your money.
        </p>


    </div>



    <div class="feature-grid">


        <div class="feature-card reveal">

            <div class="feature-icon">
                ↗
            </div>

            <h3>
                Send Money
            </h3>

            <p>
                Instantly transfer money using UPI ID,
                mobile number or bank account.
            </p>

        </div>


        <div class="feature-card reveal">

            <div class="feature-icon">
                ▦
            </div>

            <h3>
                Scan & Pay
            </h3>

            <p>
                Scan any QR code and make payments
                in seconds.
            </p>

        </div>


        <div class="feature-card reveal">

            <div class="feature-icon">
                ▤
            </div>

            <h3>
                Pay Bills
            </h3>

            <p>
                Recharge, pay utility bills and manage
                your subscriptions.
            </p>

        </div>


        <div class="feature-card reveal">

            <div class="feature-icon">
                ◷
            </div>

            <h3>
                Track History
            </h3>

            <p>
                View and manage all your transactions
                in one place.
            </p>

        </div>


    </div>

</section>



<!-- =====================================================
     CTA
===================================================== -->

<section class="cta-section" id="security">


    <div class="cta-box reveal">


        <div class="cta-decoration"></div>


        <h2>
            Join <span>Ultimate UPI</span>
            Today
        </h2>


        <p>
            Experience a secure, fast and effortless
            way to pay.
        </p>


        <a href="{{ url('/signup') }}" class="primary-btn">
            Create Account →
        </a>


    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer id="about">


    <div class="footer-brand">


        <img
            src="{{ asset('images/logo.png') }}"
            class="footer-logo"
            alt="Ultimate UPI"
        >


        <div>

            <strong>
                Ultimate UPI
            </strong>

            <span>
                Payments Made Simpler
            </span>

        </div>


    </div>


    <div class="footer-links">

        <a href="#about">
            About
        </a>

        <a href="#">
            Privacy
        </a>

        <a href="#">
            Terms
        </a>

        <a href="#support">
            Support
        </a>

    </div>


    <div>

        © {{ date('Y') }}
        Ultimate UPI.
        All rights reserved.

    </div>


</footer>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>


    /* ==========================================
       SCROLL REVEAL
    ========================================== */

    const revealElements =
        document.querySelectorAll(".reveal");


    const observer =
        new IntersectionObserver(

            (entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target
                            .classList
                            .add("active");

                    }

                });

            },

            {
                threshold: 0.15
            }

        );


    revealElements.forEach(element => {

        observer.observe(element);

    });



    /* ==========================================
       PHONE MOUSE MOVEMENT
    ========================================== */

    const phone =
        document.querySelector(".phone");


    document.addEventListener(
        "mousemove",
        function(event) {

            if (window.innerWidth < 900) {
                return;
            }


            const x =
                (window.innerWidth / 2 - event.clientX)
                / 100;


            const y =
                (window.innerHeight / 2 - event.clientY)
                / 100;


            phone.style.transform =
                `
                translateY(-5px)
                rotate(${4 + x * .15}deg)
                rotateY(${x}deg)
                rotateX(${y}deg)
                `;

        }
    );


</script>


</body>
</html>