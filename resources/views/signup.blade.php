 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login | Ultimate UPI</title>

    <link rel="icon"
          type="image/png"
          href="/favicon-96x96.png">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            min-height: 100vh;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            color: #102652;

            background:
                radial-gradient(
                    circle at 10% 15%,
                    rgba(105, 202, 255, .25),
                    transparent 32%
                ),
                radial-gradient(
                    circle at 90% 85%,
                    rgba(125, 145, 255, .20),
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #f8fcff,
                    #edf8ff,
                    #f3f5ff
                );

            overflow-x: hidden;
        }


        /* =========================================
           NAVBAR
        ========================================= */

        .navbar {

            height: 78px;

            padding: 0 5%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background:
                rgba(255,255,255,.78);

            border-bottom:
                1px solid
                rgba(210,225,240,.7);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);
        }


        .brand {

            display: flex;

            align-items: center;

            gap: 12px;

            text-decoration: none;
        }


        .brand img {

            width: 48px;
            height: 48px;

            object-fit: contain;

            border-radius: 14px;
        }


        .brand-name {

            color: #102652;

            font-size: 24px;

            font-weight: 800;
        }


        .back-home {

            color: #5c7595;

            text-decoration: none;

            font-size: 13px;

            font-weight: 600;

            transition: .2s;
        }


        .back-home:hover {

            color: #187bea;
        }


        /* =========================================
           MAIN
        ========================================= */

        .login-page {
    min-height: auto !important;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 30px 20px 0 !important;

    margin: 0 !important;
}

        .login-container {

            width: 100%;
            margin-bottom: 37px !important;

            max-width: 470px;
        }


        /* =========================================
           LOGIN CARD
        ========================================= */

        .login-card {

            width: 100%;

            padding: 38px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.72);

            border:
                1px solid
                rgba(255,255,255,.95);

            box-shadow:
                0 25px 70px
                rgba(45,105,160,.13);

            backdrop-filter:
                blur(25px);

            -webkit-backdrop-filter:
                blur(25px);
        }


        /* =========================================
           LOGO
        ========================================= */

        .login-logo {

            width: 65px;

            height: 65px;

            margin: 0 auto 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 19px;

            background:
                rgba(255,255,255,.85);

            box-shadow:
                0 8px 25px
                rgba(40,120,200,.12);

            overflow: hidden;
        }


        .login-logo img {

            width: 52px;

            height: 52px;

            object-fit: contain;
        }


        /* =========================================
           HEADING
        ========================================= */

        .login-heading {

            text-align: center;

            margin-bottom: 30px;
        }


        .login-heading .label {

            display: inline-block;

            margin-bottom: 8px;

            color: #2581e9;

            font-size: 18px;

            font-weight: 800;

            letter-spacing: 1.2px;
        }


        .login-heading h1 {

            margin-bottom: 9px;

            color: #102652;

            font-size: 32px;

            line-height: 1.15;

            letter-spacing: -.8px;
        }


        .login-heading h1 span {

            color: #237fe8;
        }


        .login-heading p {

            color: #7187a5;

            font-size: 13px;

            line-height: 1.6;
        }


        /* =========================================
           FORM
        ========================================= */

        .form-group {

            margin-bottom: 19px;
        }


        .form-group label {

            display: block;

            margin-bottom: 8px;

            color: #28466d;

            font-size: 12px;

            font-weight: 700;
        }


        .required {

            color: #2581e9;
        }


        .input-wrapper {

            position: relative;
        }


        .input-icon {

            position: absolute;

            left: 15px;

            top: 50%;

            transform:
                translateY(-50%);

            width: 22px;

            height: 22px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 7px;

            background:
                #e3f3ff;

            color: #197bea;

            font-size: 11px;

            font-weight: 800;

            pointer-events: none;
        }


        .form-input {

            width: 100%;

            height: 52px;

            padding:
                0 15px 0 48px;

            border:
                1px solid
                #d8e7f4;

            border-radius: 14px;

            outline: none;

            background:
                rgba(255,255,255,.72);

            color: #16305b;

            font-family: inherit;

            font-size: 13px;

            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }


        .form-input::placeholder {

            color: #9aadc2;
        }


        .form-input:focus {

            border-color:
                #61aaf0;

            background:
                rgba(255,255,255,.95);

            box-shadow:
                0 0 0 4px
                rgba(48,137,230,.10);
        }


        /* =========================================
           UPI INPUT
        ========================================= */

        .upi-hint {

            margin-top: 6px;

            color: #8297b0;

            font-size: 10px;
        }


        /* =========================================
           SUBMIT BUTTON
        ========================================= */

        .login-button {

            width: 100%;

            height: 53px;

            margin-top: 8px;

            border: none;

            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    #2185ee,
                    #116bd7
                );

            color: white;

            font-family: inherit;

            font-size: 14px;

            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 12px 25px
                rgba(25,120,225,.22);

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }


        .login-button:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 16px 30px
                rgba(25,120,225,.28);
        }


        .login-button:active {

            transform:
                translateY(0);
        }


        /* =========================================
           SECURITY NOTE
        ========================================= */

        .security-note {

            margin-top: 20px;

            padding: 12px 14px;

            display: flex;

            align-items: center;

            gap: 9px;

            border-radius: 12px;

            background:
                rgba(230,245,255,.65);

            color: #7188a5;

            font-size: 10px;

            line-height: 1.5;
        }


        .security-icon {

            flex-shrink: 0;

            color: #2581e9;

            font-size: 15px;
        }

/* =====================================================
   FOOTER
===================================================== */

footer {
    width: 100vw !important;
    max-width: 100vw !important;

    position: relative !important;
    left: 50% !important;
    transform: translateX(-50%) !important;

    margin: 0 !important;

    padding: 18px 32px !important;

    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;

    gap: 30px;

    border-top: 1px solid rgba(160, 200, 230, .25);

    background: rgba(255, 255, 255, .42);

    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);

    color: #60749a;
    font-size: 12px;

    box-sizing: border-box !important;
}

/* =====================================================
   BRAND
===================================================== */

.footer-brand {
    display: flex !important;

    flex-direction: row !important;

    align-items: center !important;

    gap: 10px;

    flex-shrink: 0;

    width: auto !important;

    text-align: left !important;
}


.footer-logo {
    width: 42px !important;
    height: 42px !important;

    object-fit: contain;

    border-radius: 11px;

    flex-shrink: 0;
}


.footer-brand strong {
    display: block;

    color: #0b1b48;

    font-size: 15px;

    font-weight: 800;
}


.footer-brand span {
    display: block;

    margin-top: 2px;

    color: #7187a5;

    font-size: 10px;
}


/* =====================================================
   LINKS
===================================================== */

.footer-links {
    display: flex !important;

    flex-direction: row !important;

    align-items: center !important;

    justify-content: center !important;

    gap: 28px !important;

    width: auto !important;

    flex: 1;

    margin: 0 !important;
}


.footer-links a {
    display: inline-block !important;

    color: #60749a;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    white-space: nowrap;

    transition: color 0.2s ease;
}


.footer-links a:hover {
    color: #0871ee;
}


/* =====================================================
   COPYRIGHT
===================================================== */

footer > div:last-child {
    flex-shrink: 0;

    width: auto !important;

    color: #7187a5;

    font-size: 11px;

    text-align: right;

    white-space: nowrap;
}


/* =====================================================
   TABLET
===================================================== */

@media (max-width: 900px) {

    footer {
        padding: 16px 24px !important;

        gap: 20px;
    }

    .footer-links {
        gap: 18px !important;
    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 650px) {

    footer {
        width: 100% !important;

        margin: 0 !important;

        padding: 18px 20px !important;

        display: flex !important;

        flex-direction: column !important;

        align-items: center !important;

        justify-content: center !important;

        gap: 14px !important;

        text-align: center;
    }


    .footer-brand {
        display: flex !important;

        flex-direction: row !important;

        align-items: center !important;

        justify-content: center !important;

        width: auto !important;

        text-align: left !important;
    }


    .footer-links {
        display: flex !important;

        flex-direction: row !important;

        flex-wrap: wrap !important;

        align-items: center !important;

        justify-content: center !important;

        gap: 10px 22px !important;

        width: 100% !important;

        flex: none !important;
    }


    .footer-links a {
        font-size: 11px;

        white-space: nowrap;
    }


    footer > div:last-child {
        width: 100% !important;

        text-align: center !important;

        white-space: normal !important;

        line-height: 1.4;
    }

}


/* =====================================================
   SMALL PHONES
===================================================== */

@media (max-width: 400px) {

    footer {
        padding: 16px 15px !important;

        gap: 12px !important;
    }


    .footer-logo {
        width: 38px !important;
        height: 38px !important;
    }


    .footer-brand strong {
        font-size: 14px;
    }


    .footer-brand span {
        font-size: 9px;
    }


    .footer-links {
        gap: 9px 18px !important;
    }


    .footer-links a {
        font-size: 10px;
    }


    footer > div:last-child {
        font-size: 9px;
    }

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

        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 550px) {

            .navbar {

                height: 70px;

                padding: 0 20px;
            }


            .brand img {

                width: 42px;

                height: 42px;
            }


            .brand-name {

                font-size: 20px;
            }


            .back-home {

                font-size: 11px;
            }


           .login-page {
    min-height: auto !important;
    padding: 25px 15px 0 !important;}

            .login-card {

                padding: 28px 20px;

                border-radius: 24px;
            }


            .login-heading h1 {

                font-size: 28px;
            }
            footer {
    flex-direction: column;
}

        }

    </style>

</head>


<body>


    <!-- =========================================
         NAVBAR
    ========================================== -->

    <header class="navbar">

        <a
            href="{{ url('/') }}"
            class="brand"
        >

            <img
                src="{{ asset('images/logo.png') }}"
                alt="Ultimate UPI"
            >

            <span class="brand-name">
                Ultimate UPI
            </span>

        </a>


        <a
            href="{{ url('/') }}"
            class="back-home"
        >
            ← Back to Home
        </a>

    </header>



    <!-- =========================================
         LOGIN PAGE
    ========================================== -->

    <main class="login-page">

        <div class="login-container">


            <div class="login-card">


                <!-- LOGO -->

                <div class="login-logo">

                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Ultimate UPI"
                    >

                </div>


                <!-- HEADING -->

                <div class="login-heading">

                    <span class="label">
                        ULTIMATE UPI
                    </span>

                    <h1>
                         <span>Wel</span>come
                    </h1>

                    <p>
                        Enter your details to continue
                        securely with Ultimate UPI.
                    </p>

                </div>



                <!-- FORM -->

                <form
                    method="POST"
                    action="{{ url('/login') }}"
                >

                    @csrf


                    <!-- UPI ID -->

                    <div class="form-group">

                        <label for="upi_id">

                            UPI ID / VPA ID

                            <span class="required">*</span>

                        </label>


                        <div class="input-wrapper">

                            <div class="input-icon">
                                @
                            </div>

                            <input
                                type="text"
                                id="upi_id"
                                name="upi_id"
                                class="form-input"
                                placeholder="example@upi"
                                autocomplete="username"
                                required
                            >

                        </div>


                        <div class="upi-hint">

                            Example:
                            yourname@upi

                        </div>

                    </div>



                    <!-- MOBILE NUMBER -->

                    <div class="form-group">

                        <label for="mobile">

                            Mobile Number

                            <span class="required">*</span>

                        </label>


                        <div class="input-wrapper">

                            <div class="input-icon">
                                ☎
                            </div>

                            <input
                                type="tel"
                                id="mobile"
                                name="mobile"
                                class="form-input"
                                placeholder="Enter 10-digit mobile number"
                                inputmode="numeric"
                                maxlength="10"
                                autocomplete="tel"
                                required
                            >

                        </div>

                    </div>



                    <!-- BANK ACCOUNT -->

                    <div class="form-group">

                        <label for="account_number">

                            Bank Account Number

                            <span class="required">*</span>

                        </label>


                        <div class="input-wrapper">

                            <div class="input-icon">
                                #
                            </div>

                            <input
                                type="text"
                                id="account_number"
                                name="account_number"
                                class="form-input"
                                placeholder="Enter bank account number"
                                inputmode="numeric"
                                autocomplete="off"
                                required
                            >

                        </div>

                    </div>



                    <!-- ACCOUNT HOLDER -->

                    <div class="form-group">

                        <label for="account_holder">

                            Account Holder / Company Name

                            <span class="required">*</span>

                        </label>


                        <div class="input-wrapper">

                            <div class="input-icon">
                                A
                            </div>

                            <input
                                type="text"
                                id="account_holder"
                                name="account_holder"
                                class="form-input"
                                placeholder="Enter name or company name"
                                autocomplete="name"
                                required
                            >

                        </div>

                    </div>



                    <!-- BUTTON -->

                    <button
                        type="submit"
                        class="login-button"
                    >

                        Continue Securely
                        &nbsp; →

                    </button>


                </form>



                <!-- SECURITY -->

                <div class="security-note">

                    <span class="security-icon">
                        🔒
                    </span>

                    <span>
                        Your information should only be processed
                        through secure, authorized payment infrastructure.
                    </span>

                </div>


            </div>

        </div>

    </main>
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


</body>

</html>