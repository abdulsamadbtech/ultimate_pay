<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BHIM UPI Payment Collection</title>

    <!-- QR Code Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:
        Inter,
        "Segoe UI",
        Arial,
        Helvetica,
        sans-serif;
}


/* =========================================================
   BODY
========================================================= */

body {

    min-height: 100vh;

    color: #102653;

    background:

        radial-gradient(
            circle at 8% 15%,
            rgba(72, 183, 255, 0.18),
            transparent 32%
        ),

        radial-gradient(
            circle at 92% 80%,
            rgba(109, 127, 255, 0.14),
            transparent 34%
        ),

        linear-gradient(
            135deg,
            #fbfdff 0%,
            #eef8ff 48%,
            #f5f6ff 100%
        );

    overflow-x: hidden;
}

/* =====================================================
   PAYMENT PAGE NAVBAR
   Matches Ultimate UPI Home Page
===================================================== */

.payment-navbar {
    width: 100%;
    height: 77px;

    background: rgba(255, 255, 255, 0.92);

    border-bottom: 1px solid rgba(210, 225, 240, 0.55);

    box-shadow:
        0 5px 25px rgba(45, 105, 160, 0.04);

    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);

    position: relative;
    z-index: 1000;
}


/* Main navbar container */

.payment-nav-container {
    width: 100%;
    max-width: 1580px;

    height: 100%;

    margin: 0 auto;

    padding: 0 80px;

    display: flex;
    align-items: center;
    justify-content: space-between;
}


/* =====================================================
   BRAND
===================================================== */

.payment-brand {
    display: flex;

    align-items: center;

    gap: 13px;

    text-decoration: none;

    flex-shrink: 0;
}


.payment-brand-logo {
    width: 52px;
    height: 52px;

    object-fit: contain;

    border-radius: 13px;

    background: white;

    box-shadow:
        0 5px 18px rgba(40, 130, 220, 0.10);
}


.payment-brand span {
    font-size: 28px;

    font-weight: 800;

    letter-spacing: -1px;

    color: #102653;
}


/* =====================================================
   NAVIGATION LINKS
===================================================== */

.payment-nav-links {
    display: flex;

    align-items: center;

    gap: 38px;

    margin-left: auto;
    margin-right: 70px;

    height: 100%;
}


.payment-nav-links a {
    position: relative;

    height: 100%;

    display: flex;

    align-items: center;

    text-decoration: none;

    color: #344b70;

    font-size: 14px;

    font-weight: 600;

    transition: color 0.2s ease;
}


.payment-nav-links a:hover {
    color: #1679ed;
}


/* Active Home link */

.payment-nav-links a.active {
    color: #1679ed;
}


/* Blue underline */

.payment-nav-links a.active::after {
    content: "";

    position: absolute;

    left: 50%;

    bottom: 17px;

    width: 24px;

    height: 3px;

    border-radius: 10px;

    background: #167cf0;

    transform: translateX(-50%);
}


/* =====================================================
   RIGHT SIDE BUTTONS
===================================================== */

.payment-nav-actions {
    display: flex;

    align-items: center;

    gap: 13px;

    flex-shrink: 0;
}


/* Login */

.payment-login-btn {
    height: 45px;

    min-width: 88px;

    padding: 0 22px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 15px;

    border: 1px solid #d9e8f5;

    background: rgba(255, 255, 255, 0.75);

    color: #102653;

    text-decoration: none;

    font-size: 13px;

    font-weight: 700;

    transition: all 0.2s ease;
}


.payment-login-btn:hover {
    border-color: #b9d8f1;

    background: #f5fbff;

    transform: translateY(-1px);
}


/* Get Started */

.payment-start-btn {
    height: 45px;

    min-width: 124px;

    padding: 0 22px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 15px;

    background:
        linear-gradient(
            135deg,
            #2588f3,
            #146fe0
        );

    color: white;

    text-decoration: none;

    font-size: 13px;

    font-weight: 700;

    box-shadow:
        0 9px 22px
        rgba(27, 117, 225, 0.22);

    transition: all 0.2s ease;
}


.payment-start-btn:hover {
    transform: translateY(-2px);

    box-shadow:
        0 13px 27px
        rgba(27, 117, 225, 0.28);
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 1100px) {

    .payment-nav-container {
        padding: 0 35px;
    }

    .payment-nav-links {
        gap: 23px;

        margin-right: 30px;
    }

    .payment-brand span {
        font-size: 24px;
    }
}


@media (max-width: 850px) {

    .payment-navbar {
        height: auto;

        padding: 15px 0;
    }

    .payment-nav-container {
        padding: 0 20px;

        flex-wrap: wrap;

        gap: 15px;
    }

    .payment-nav-links {
        order: 3;

        width: 100%;

        height: 40px;

        justify-content: center;

        margin: 0;

        gap: 22px;
    }

    .payment-nav-links a {
        height: 40px;

        font-size: 12px;
    }

    .payment-nav-links a.active::after {
        bottom: 0;
    }
}


@media (max-width: 550px) {

    .payment-brand-logo {
        width: 43px;
        height: 43px;
    }

    .payment-brand span {
        font-size: 21px;
    }

    .payment-nav-actions {
        gap: 7px;
    }

    .payment-login-btn,
    .payment-start-btn {
        height: 40px;

        min-width: auto;

        padding: 0 13px;

        border-radius: 12px;

        font-size: 11px;
    }

    .payment-nav-links {
        gap: 13px;

        overflow-x: auto;

        justify-content: flex-start;

        padding-bottom: 2px;
    }

    .payment-nav-links a {
        white-space: nowrap;
    }
}
/* =========================================================
   MAIN CONTAINER
========================================================= */

.container {

    width: 100%;

    max-width: 1180px;

    margin: 0 auto;

    padding:
        42px 25px 65px;
}


/* =========================================================
   HEADER
========================================================= */

.header {

    margin-bottom: 30px;
}


.header h1 {

    font-size: 32px;

    line-height: 1.15;

    font-weight: 800;

    letter-spacing: -1px;

    color: #102653;

    margin-bottom: 10px;
}


.header h1 span {

    color: #2584ed;

    font-weight: 700;
}


.header p {

    color: #7187a3;

    font-size: 13px;

    line-height: 1.6;

    margin-bottom: 0;
}


/* =========================================================
   MAIN GRID
========================================================= */

.main-grid {

    display: grid;

    grid-template-columns:
        340px 1fr;

    gap: 28px;

    align-items: start;
}


/* =========================================================
   LEFT CARD
========================================================= */

.card {

    background:

        linear-gradient(
            145deg,
            rgba(255, 255, 255, 0.86),
            rgba(241, 249, 255, 0.70)
        );

    border:
        1px solid
        rgba(255, 255, 255, 0.95);

    border-radius: 26px;

    padding: 27px;

    box-shadow:

        0 25px 65px
        rgba(47, 108, 164, 0.12),

        inset 0 1px 0
        rgba(255,255,255,.95);

    backdrop-filter:
        blur(25px);

    -webkit-backdrop-filter:
        blur(25px);

    position: relative;

    overflow: hidden;
}


/* card glow */

.card::before {

    content: "";

    position: absolute;

    width: 170px;

    height: 170px;

    top: -100px;

    right: -60px;

    border-radius: 50%;

    background:
        rgba(70, 183, 255, 0.10);

    filter:
        blur(30px);

    pointer-events: none;
}


/* =========================================================
   CARD TITLE
========================================================= */

.card-title {

    font-size: 18px;

    font-weight: 800;

    color: #102653;

    margin-bottom: 7px;

    position: relative;
}


.card-description {

    font-size: 11px;

    color: #7b90a9;

    line-height: 1.6;

    margin-bottom: 24px;

    position: relative;
}


/* =========================================================
   FORM
========================================================= */

.form-group {

    margin-bottom: 17px;
}


label {

    display: block;

    font-size: 11px;

    font-weight: 700;

    color: #29476d;

    margin-bottom: 7px;
}


label span {

    font-weight: normal;

    color: #91a3b8;
}


/* =========================================================
   INPUTS
========================================================= */

input {

    width: 100%;

    height: 46px;

    border:
        1px solid
        #d6e6f2;

    border-radius: 13px;

    padding:
        0 13px;

    font-size: 12px;

    color: #263f63;

    background:
        rgba(255,255,255,.68);

    outline: none;

    transition:
        .2s ease;
}


input::placeholder {

    color: #9aabbe;
}


input:hover {

    background:
        rgba(255,255,255,.85);

    border-color:
        #c6ddec;
}


input:focus {

    border-color:
        #55a6ed;

    background:
        rgba(255,255,255,.96);

    box-shadow:

        0 0 0 4px
        rgba(41,132,235,.08),

        0 8px 20px
        rgba(40,120,190,.06);
}


/* =========================================================
   AMOUNT
========================================================= */

.amount-wrapper {

    position: relative;
}


.amount-wrapper input {

    padding-left: 37px;

    padding-right: 45px;
}


.rupee-symbol {

    position: absolute;

    left: 14px;

    top: 14px;

    color: #2784e9;

    font-size: 13px;

    font-weight: 700;

    z-index: 2;
}


.currency {

    position: absolute;

    right: 13px;

    top: 15px;

    color: #8196ae;

    font-size: 9px;

    font-weight: 700;

    z-index: 2;
}


.hint {

    font-size: 9px;

    color: #8b9db2;

    margin-top: 7px;
}


/* =========================================================
   DIVIDER
========================================================= */

.divider {

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #dcebf5,
            transparent
        );

    margin:
        21px 0;

    border: 0;
}


/* =========================================================
   GENERATE BUTTON
========================================================= */

.generate-btn {

    width: 100%;

    border: none;

    border-radius: 13px;

    height: 45px;

    background:
        linear-gradient(
            135deg,
            #2689f3,
            #1473dc
        );

    color: white;

    font-size: 12px;

    font-weight: 700;

    cursor: pointer;

    box-shadow:
        0 12px 25px
        rgba(30,120,225,.20);

    transition:
        .2s ease;
}


.generate-btn:hover {

    transform:
        translateY(-2px);

    box-shadow:
        0 16px 30px
        rgba(30,120,225,.27);
}


.generate-btn:disabled {

    opacity: .6;

    cursor: not-allowed;

    transform: none;
}


/* =========================================================
   BHIM / UPI BUTTON
========================================================= */

.bhim-btn {

    width: 100%;

    height: 45px;

    margin-top: 10px;

    border:
        1px solid
        #cfe3f1;

    border-radius: 13px;

    background:
        rgba(255,255,255,.65);

    color: #2870a9;

    font-size: 11px;

    font-weight: 700;

    cursor: pointer;

    transition:
        .2s ease;
}


.bhim-btn:hover {

    background:
        rgba(228,245,255,.85);

    border-color:
        #9dcced;

    transform:
        translateY(-1px);
}


/* =========================================================
   SECURITY TEXT
========================================================= */

.secure-text {

    text-align: center;

    font-size: 9px;

    color: #8195ad;

    margin-top: 15px;
}


/* =========================================================
   RIGHT SECTION
========================================================= */

.summary-header {

    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 17px;
}


.summary-header h2 {

    font-size: 18px;

    color: #102653;

    font-weight: 800;
}


/* =========================================================
   PRINT BUTTON
========================================================= */

.print-btn {

    background:
        rgba(255,255,255,.68);

    border:
        1px solid
        #d6e6f2;

    padding:
        8px 12px;

    border-radius: 11px;

    font-size: 10px;

    color: #58728f;

    cursor: pointer;

    transition:
        .2s ease;
}


.print-btn:hover {

    background:
        rgba(227,244,255,.85);

    color: #167be8;

    border-color:
        #b9d8ee;
}


/* =========================================================
   SUMMARY INFO
========================================================= */

.summary-info {

    display: grid;

    grid-template-columns:
        1fr 1fr;

    gap: 20px;

    margin-bottom: 20px;

    padding: 20px;

    border-radius: 20px;

    background:
        rgba(255,255,255,.52);

    border:
        1px solid
        rgba(255,255,255,.80);

    box-shadow:
        0 12px 35px
        rgba(45,110,160,.06);

    backdrop-filter:
        blur(18px);

    -webkit-backdrop-filter:
        blur(18px);
}


.info-label {

    color: #8a9caf;

    font-size: 9px;

    margin-bottom: 6px;
}


.total-amount {

    font-size: 27px;

    font-weight: 800;

    color: #102653;
}


.info-value {

    color: #29476d;

    font-size: 12px;

    font-weight: 700;
}


/* =========================================================
   USER DETAILS
========================================================= */

.user-details {

    display: flex;

    justify-content: space-between;

    align-items: center;

    padding:
        16px 18px;

    margin-bottom: 17px;

    border-radius: 17px;

    background:
        rgba(255,255,255,.55);

    border:
        1px solid
        rgba(220,235,246,.75);

    box-shadow:
        0 8px 25px
        rgba(45,110,160,.05);
}


.user-name {

    font-size: 12px;

    font-weight: 800;

    color: #29476d;

    margin-bottom: 5px;
}


.user-upi {

    font-size: 10px;

    color: #8a9caf;
}


/* =========================================================
   STATUS
========================================================= */

.status {

    background:
        rgba(224,247,236,.85);

    color:
        #39885b;

    padding:
        6px 11px;

    border-radius: 20px;

    font-size: 9px;

    font-weight: 700;

    border:
        1px solid
        rgba(179,222,196,.70);
}


/* =========================================================
   QR GRID
========================================================= */

.qr-grid {

    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    gap: 14px;
}


/* =========================================================
   QR CARD
========================================================= */

.qr-card {

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.88),
            rgba(242,249,255,.75)
        );

    border:
        1px solid
        rgba(215,232,244,.90);

    border-radius: 19px;

    padding: 15px;

    text-align: center;

    box-shadow:
        0 12px 30px
        rgba(45,110,160,.07);

    transition:
        .2s ease;
}


.qr-card:hover {

    transform:
        translateY(-2px);

    box-shadow:
        0 16px 35px
        rgba(45,110,160,.10);
}


/* =========================================================
   QR TOP
========================================================= */

.qr-top {

    display: flex;

    justify-content: space-between;

    font-size: 9px;

    color: #8296ad;

    margin-bottom: 13px;
}


/* =========================================================
   QR
========================================================= */

.qr-code {

    display: flex;

    justify-content: center;

    align-items: center;

    min-height: 145px;

    margin-bottom: 11px;

    padding: 7px;

    border-radius: 13px;

    background: #ffffff;

    border:
        1px solid
        #e0edf5;
}


.qr-code img {

    width: 145px;

    height: 145px;
}


.qr-code canvas {

    width: 145px !important;

    height: 145px !important;
}


/* =========================================================
   QR AMOUNT
========================================================= */

.qr-amount {

    font-size: 17px;

    font-weight: 800;

    color: #102653;

    margin-bottom: 5px;
}


.qr-upi {

    font-size: 9px;

    color: #8296ad;

    margin-bottom: 12px;

    word-break: break-all;
}


/* =========================================================
   DOWNLOAD
========================================================= */

.download-btn {

    width: 100%;

    height: 34px;

    border:
        1px solid
        #d8e8f3;

    background:
        rgba(229,245,255,.70);

    color: #2879b5;

    font-size: 9px;

    font-weight: 700;

    border-radius: 10px;

    cursor: pointer;

    transition:
        .2s ease;
}


.download-btn:hover {

    background:
        rgba(207,237,255,.95);

    color: #1478e2;
}


/* =========================================================
   EMPTY STATE
========================================================= */

.empty-state {

    text-align: center;

    color: #8b9db2;

    font-size: 11px;

    line-height: 1.7;

    padding: 55px 20px;

    border:
        1px dashed
        #cbdfea;

    border-radius: 19px;

    background:
        rgba(255,255,255,.35);

    grid-column:
        1 / -1;
}


/* =========================================================
   ERROR
========================================================= */

.error-message {

    display: none;

    margin-top: 10px;

    padding:
        10px 12px;

    border-radius: 10px;

    background:
        rgba(255,235,235,.75);

    border:
        1px solid
        rgba(235,180,180,.65);

    color: #c94b55;

    font-size: 10px;

    line-height: 1.5;
}


/* =========================================================
   FOOTER
========================================================= */

footer {

    padding:
        28px 5%;

    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 20px;

    border-top:
        1px solid
        rgba(160,200,230,.30);

    background:
        rgba(255,255,255,.40);

    backdrop-filter:
        blur(18px);

    -webkit-backdrop-filter:
        blur(18px);

    color: #7c91aa;

    font-size: 10px;
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

    color: #102653;

    font-size: 13px;
}


.footer-brand span {

    color: #8296ad;

    font-size: 9px;
}


.footer-links {

    display: flex;

    gap: 22px;
}


.footer-links a {

    color: #7187a2;

    text-decoration: none;

    font-size: 10px;

    transition:
        .2s ease;
}


.footer-links a:hover {

    color: #167be8;
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 800px) {

    .container {

        padding:
            30px 15px 50px;
    }


    .header h1 {

        font-size: 27px;
    }


    .main-grid {

        grid-template-columns:
            1fr;

        gap: 22px;
    }


    .qr-grid {

        grid-template-columns:
            1fr;
    }


    .summary-header {

        margin-bottom: 15px;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 500px) {

    .header h1 {

        font-size: 24px;
    }


    .card {

        padding: 22px;

        border-radius: 22px;
    }


    .summary-info {

        padding: 16px;

        gap: 12px;
    }


    .total-amount {

        font-size: 23px;
    }


    footer {

        flex-direction: column;

        text-align: center;

        padding:
            25px 20px;
    }


    .footer-links {

        gap: 15px;
    }
}


/* =========================================================
   PRINT
   KEEP EXISTING PRINT BEHAVIOUR
========================================================= */

@media print {

    .top-bar {

        display: none;
    }


    .card {

        display: none;
    }


    .print-btn {

        display: none;
    }


    .main-grid {

        display: block;
    }


    .container {

        max-width: 100%;

        padding: 10px;
    }


    .qr-grid {

        grid-template-columns:
            repeat(3, 1fr);
    }


    .qr-card {

        break-inside: avoid;
    }

}

</style>
</head>


<body>

<!-- ===== ULTIMATE UPI NAVBAR ===== -->
<nav class="payment-navbar">

    <div class="payment-nav-container">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="payment-brand">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Ultimate UPI"
                class="payment-brand-logo"
            >
            <span>Ultimate UPI</span>
        </a>

        <!-- Navigation -->
        <div class="payment-nav-links">

            <a href="{{ url('/') }}" class="active">
                Home
            </a>

            <a href="{{ url('/#features') }}">
                Features
            </a>

            <a href="{{ url('/#security') }}">
                Security
            </a>

            <a href="{{ url('/#about') }}">
                About
            </a>

            <a href="{{ url('/support') }}">
                Support
            </a>

        </div>

        <!-- Right buttons -->
        <div class="payment-nav-actions">

            <a href="{{ url('/login') }}" class="payment-login-btn">
                Login
            </a>

            <a href="{{ url('/payment') }}" class="payment-start-btn">
                Get Started
            </a>

        </div>

    </div>

</nav>


<div class="container">


    <!-- HEADER -->

    <div class="header">

        <h1>
            Collect the full amount.
            <span>Pay ₹0 fees.</span>
        </h1>

        <p>
            Accept UPI payments directly using BHIM UPI.
        </p>

    </div>


    <div class="main-grid">


        <!-- ========================= -->
        <!-- LEFT FORM -->
        <!-- ========================= -->

        <div class="card">

            <div class="card-title">
                Payment details
            </div>

            <div class="card-description">
                Add your UPI details and the full amount you are owed.
            </div>


            <form id="paymentForm">


                <!-- UPI ID -->

                <div class="form-group">

                    <label>
                        Your UPI ID
                    </label>

                    <input
                        type="text"
                        id="upiId"
                        placeholder="example@upi"
                        autocomplete="off"
                        required
                    >

                </div>


                <!-- ACCOUNT NAME -->

                <div class="form-group">

                    <label>
                        Account holder name
                    </label>

                    <input
                        type="text"
                        id="accountName"
                        placeholder="Jane Doe"
                        required
                    >

                </div>


                <div class="divider"></div>


                <!-- AMOUNT -->

                <div class="form-group">

                    <label>
                        Full amount to collect
                    </label>


                    <div class="amount-wrapper">

                        <span class="rupee-symbol">
                            ₹
                        </span>


                        <input
                            type="number"
                            id="amount"
                            placeholder="4500"
                            min="1"
                            max="1999900"
                            step="0.01"
                            required
                        >


                        <span class="currency">
                            INR
                        </span>

                    </div>


                    <div class="hint">
                        Maximum ₹19,99,900 • Up to 100 QR codes
                    </div>

                </div>


                <!-- NOTE -->

                <div class="form-group">

                    <label>
                        Payment note
                        <span>Optional</span>
                    </label>


                    <input
                        type="text"
                        id="paymentNote"
                        placeholder="e.g. Invoice 001"
                    >

                </div>


                <!-- GENERATE -->

                <button
                    class="generate-btn"
                    type="submit"
                    id="generateButton"
                >

                    Generate QR codes →

                </button>


                <!-- OPEN UPI -->

                <button
                    type="button"
                    class="bhim-btn"
                    onclick="openUPIPayment()"
                >

                    Open BHIM / UPI App

                </button>


                <div
                    class="error-message"
                    id="errorMessage"
                ></div>


            </form>


            <div class="secure-text">

                🔒 Payment details stay in your browser.

            </div>

        </div>



        <!-- ========================= -->
        <!-- RIGHT SUMMARY -->
        <!-- ========================= -->

        <div>


            <!-- SUMMARY HEADER -->

            <div class="summary-header">

                <h2>
                    Payment summary
                </h2>


                <button
                    class="print-btn"
                    onclick="window.print()"
                >

                    🖨 Print all

                </button>

            </div>



            <!-- SUMMARY -->

            <div class="summary-info">


                <div>

                    <div class="info-label">
                        Total to collect
                    </div>

                    <div
                        class="total-amount"
                        id="totalDisplay"
                    >
                        ₹0
                    </div>

                </div>



                <div>

                    <div class="info-label">
                        QR codes
                    </div>

                    <div
                        class="info-value"
                        id="qrCount"
                    >
                        0
                    </div>


                    <div
                        class="info-label"
                        style="margin-top:20px;"
                    >
                        Amount per QR
                    </div>


                    <div class="info-value">
                        Up to ₹1,999
                    </div>

                </div>

            </div>



            <!-- USER -->

            <div class="user-details">


                <div>

                    <div
                        class="user-name"
                        id="summaryName"
                    >
                        Account holder
                    </div>


                    <div
                        class="user-upi"
                        id="summaryUpi"
                    >
                        example@upi
                    </div>

                </div>


                <div
                    class="status"
                    id="status"
                >
                    Waiting
                </div>

            </div>



            <!-- QR GRID -->

            <div
                id="qrGrid"
                class="qr-grid"
            >

                <div class="empty-state">

                    Enter your payment details and click
                    "Generate QR codes".

                </div>

            </div>


        </div>

    </div>

</div>



<script>


/*
|--------------------------------------------------------------------------
| SETTINGS
|--------------------------------------------------------------------------
*/

const MAX_PER_QR = 1999;

const MAX_TOTAL = 1999900;



/*
|--------------------------------------------------------------------------
| FORM
|--------------------------------------------------------------------------
*/

const paymentForm =
    document.getElementById("paymentForm");


paymentForm.addEventListener(
    "submit",
    function(event) {

        event.preventDefault();


        generatePayments();

    }
);



/*
|--------------------------------------------------------------------------
| GENERATE PAYMENTS
|--------------------------------------------------------------------------
*/

function generatePayments() {


    const upiId =
        document.getElementById("upiId")
        .value
        .trim();


    const accountName =
        document.getElementById("accountName")
        .value
        .trim();


    const amount =
        Number(
            document.getElementById("amount")
            .value
        );


    const paymentNote =
        document.getElementById("paymentNote")
        .value
        .trim();


    const error =
        document.getElementById("errorMessage");


    /*
    |--------------------------------------------------------------------------
    | VALIDATION
    |--------------------------------------------------------------------------
    */

    error.style.display = "none";



    if (!upiId) {

        showError(
            "Please enter your UPI ID."
        );

        return;

    }



    if (!upiId.includes("@")) {

        showError(
            "Please enter a valid UPI ID, for example example@upi."
        );

        return;

    }



    if (!accountName) {

        showError(
            "Please enter the account holder name."
        );

        return;

    }



    if (!amount || amount <= 0) {

        showError(
            "Please enter a valid amount."
        );

        return;

    }



    if (amount > MAX_TOTAL) {

        showError(
            "Maximum amount is ₹19,99,900."
        );

        return;

    }



    /*
    |--------------------------------------------------------------------------
    | BUTTON
    |--------------------------------------------------------------------------
    */

    const button =
        document.getElementById("generateButton");


    button.disabled = true;

    button.innerText =
        "Generating...";



    /*
    |--------------------------------------------------------------------------
    | UPDATE SUMMARY
    |--------------------------------------------------------------------------
    */

    document.getElementById(
        "totalDisplay"
    ).innerText =
        formatMoney(amount);


    document.getElementById(
        "summaryName"
    ).innerText =
        accountName;


    document.getElementById(
        "summaryUpi"
    ).innerText =
        upiId;


    document.getElementById(
        "status"
    ).innerText =
        "Ready";



    /*
    |--------------------------------------------------------------------------
    | SPLIT AMOUNT
    |--------------------------------------------------------------------------
    */

    let remaining =
        Math.round(amount * 100);


    const maxPerQr =
        MAX_PER_QR * 100;


    const qrAmounts = [];


    while (remaining > 0) {


        const current =
            Math.min(
                remaining,
                maxPerQr
            );


        qrAmounts.push(
            current / 100
        );


        remaining -= current;

    }



    /*
    |--------------------------------------------------------------------------
    | QR COUNT
    |--------------------------------------------------------------------------
    */

    document.getElementById(
        "qrCount"
    ).innerText =
        qrAmounts.length;



    /*
    |--------------------------------------------------------------------------
    | QR GRID
    |--------------------------------------------------------------------------
    */

    const qrGrid =
        document.getElementById(
            "qrGrid"
        );


    qrGrid.innerHTML = "";



    /*
    |--------------------------------------------------------------------------
    | CREATE EACH QR
    |--------------------------------------------------------------------------
    */

    qrAmounts.forEach(
        function(currentAmount, index) {


            createQRCode(

                currentAmount,

                index + 1,

                qrAmounts.length,

                upiId,

                accountName,

                paymentNote

            );

        }
    );



    /*
    |--------------------------------------------------------------------------
    | RESTORE BUTTON
    |--------------------------------------------------------------------------
    */

    setTimeout(
        function() {

            button.disabled = false;

            button.innerText =
                "Generate QR codes →";

        },
        500
    );

}



/*
|--------------------------------------------------------------------------
| CREATE QR CODE
|--------------------------------------------------------------------------
*/

function createQRCode(
    currentAmount,
    qrNumber,
    totalQR,
    upiId,
    accountName,
    paymentNote
) {


    /*
    |--------------------------------------------------------------------------
    | CARD
    |--------------------------------------------------------------------------
    */

    const card =
        document.createElement(
            "div"
        );


    card.className =
        "qr-card";



    /*
    |--------------------------------------------------------------------------
    | TOP
    |--------------------------------------------------------------------------
    */

    const top =
        document.createElement(
            "div"
        );


    top.className =
        "qr-top";


    top.innerHTML = `

        <span>
            Payment ${qrNumber}
        </span>

        <span>
            of ${totalQR}
        </span>

    `;



    /*
    |--------------------------------------------------------------------------
    | QR CONTAINER
    |--------------------------------------------------------------------------
    */

    const qrContainer =
        document.createElement(
            "div"
        );


    qrContainer.className =
        "qr-code";



    /*
    |--------------------------------------------------------------------------
    | QR PAYMENT DATA
    |--------------------------------------------------------------------------
    |
    | Standard UPI payment URI.
    |
    | This QR can be scanned by BHIM
    | and compatible UPI applications.
    |
    |--------------------------------------------------------------------------
    */

    let upiUrl =
        "upi://pay" +

        "?pa=" +
        encodeURIComponent(
            upiId
        ) +

        "&pn=" +
        encodeURIComponent(
            accountName
        ) +

        "&am=" +
        Number(currentAmount)
            .toFixed(2) +

        "&cu=INR";



    /*
    |--------------------------------------------------------------------------
    | PAYMENT NOTE
    |--------------------------------------------------------------------------
    */

    if (paymentNote) {

        upiUrl +=
            "&tn=" +
            encodeURIComponent(
                paymentNote
            );

    }



    /*
    |--------------------------------------------------------------------------
    | GENERATE QR
    |--------------------------------------------------------------------------
    */

    new QRCode(
        qrContainer,
        {
            text: upiUrl,

            width: 145,

            height: 145,

            correctLevel:
                QRCode.CorrectLevel.M
        }
    );



    /*
    |--------------------------------------------------------------------------
    | AMOUNT
    |--------------------------------------------------------------------------
    */

    const amountElement =
        document.createElement(
            "div"
        );


    amountElement.className =
        "qr-amount";


    amountElement.innerText =
        formatMoney(
            currentAmount
        );



    /*
    |--------------------------------------------------------------------------
    | UPI ID
    |--------------------------------------------------------------------------
    */

    const upiElement =
        document.createElement(
            "div"
        );


    upiElement.className =
        "qr-upi";


    upiElement.innerText =
        upiId;



    /*
    |--------------------------------------------------------------------------
    | DOWNLOAD BUTTON
    |--------------------------------------------------------------------------
    */

    const downloadButton =
        document.createElement(
            "button"
        );


    downloadButton.className =
        "download-btn";


    downloadButton.innerText =
        "↓ Download PNG";



    downloadButton.addEventListener(
        "click",
        function() {


            const canvas =
                qrContainer.querySelector(
                    "canvas"
                );


            const image =
                qrContainer.querySelector(
                    "img"
                );


            let downloadUrl =
                null;



            if (canvas) {

                downloadUrl =
                    canvas.toDataURL(
                        "image/png"
                    );

            }

            else if (image) {

                downloadUrl =
                    image.src;

            }



            if (!downloadUrl) {

                alert(
                    "QR code is not ready yet."
                );

                return;

            }



            /*
            |--------------------------------------------------------------------------
            | DOWNLOAD
            |--------------------------------------------------------------------------
            */

            const link =
                document.createElement(
                    "a"
                );


            link.href =
                downloadUrl;


            link.download =
                "bhim-upi-payment-" +
                qrNumber +
                ".png";


            link.click();

        }
    );



    /*
    |--------------------------------------------------------------------------
    | APPEND CARD
    |--------------------------------------------------------------------------
    */

    card.appendChild(top);

    card.appendChild(
        qrContainer
    );

    card.appendChild(
        amountElement
    );

    card.appendChild(
        upiElement
    );

    card.appendChild(
        downloadButton
    );


    document
        .getElementById("qrGrid")
        .appendChild(card);

}



/*
|--------------------------------------------------------------------------
| OPEN UPI APP
|--------------------------------------------------------------------------
|
| Uses the standard UPI payment URI.
|
| On a phone, Android/iOS can route the
| payment request to an installed UPI app.
|
|--------------------------------------------------------------------------
*/

function openUPIPayment() {


    const upiId =
        document.getElementById("upiId")
        .value
        .trim();


    const accountName =
        document.getElementById("accountName")
        .value
        .trim();


    const amount =
        Number(
            document.getElementById("amount")
            .value
        );


    const paymentNote =
        document.getElementById("paymentNote")
        .value
        .trim();



    /*
    |--------------------------------------------------------------------------
    | VALIDATE
    |--------------------------------------------------------------------------
    */

    if (!upiId) {

        alert(
            "Please enter your UPI ID."
        );

        return;

    }



    if (!accountName) {

        alert(
            "Please enter account holder name."
        );

        return;

    }



    if (!amount || amount <= 0) {

        alert(
            "Please enter a valid amount."
        );

        return;

    }



    /*
    |--------------------------------------------------------------------------
    | UPI URL
    |--------------------------------------------------------------------------
    */

    let upiUrl =
        "upi://pay" +

        "?pa=" +
        encodeURIComponent(
            upiId
        ) +

        "&pn=" +
        encodeURIComponent(
            accountName
        ) +

        "&am=" +
        amount.toFixed(2) +

        "&cu=INR";



    if (paymentNote) {

        upiUrl +=
            "&tn=" +
            encodeURIComponent(
                paymentNote
            );

    }



    /*
    |--------------------------------------------------------------------------
    | OPEN
    |--------------------------------------------------------------------------
    */

    window.location.href =
        upiUrl;

}



/*
|--------------------------------------------------------------------------
| FORMAT MONEY
|--------------------------------------------------------------------------
*/

function formatMoney(amount) {

    return "₹" +
        Number(amount)
        .toLocaleString(
            "en-IN",
            {
                minimumFractionDigits: 0,
                maximumFractionDigits: 2
            }
        );

}



/*
|--------------------------------------------------------------------------
| SHOW ERROR
|--------------------------------------------------------------------------
*/

function showError(message) {


    const error =
        document.getElementById(
            "errorMessage"
        );


    error.innerText =
        message;


    error.style.display =
        "block";

}


</script>

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