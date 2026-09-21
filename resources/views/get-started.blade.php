<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Get Started | Ultimate UPI</title>

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
                    circle at 15% 20%,
                    rgba(125,205,255,.25),
                    transparent 35%
                ),
                radial-gradient(
                    circle at 85% 80%,
                    rgba(140,160,255,.20),
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #f8fcff,
                    #edf8ff,
                    #f4f6ff
                );

            display: flex;

            flex-direction: column;

            overflow-x: hidden;
        }


        /* ===============================
           NAVBAR
        =============================== */

        .navbar {

            height: 78px;

            padding:
                0 5%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background:
                rgba(255,255,255,.72);

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

            font-size: 25px;

            font-weight: 800;
        }


        .back-home {

            color: #527092;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;

            transition: .2s;
        }


        .back-home:hover {

            color: #1678e8;
        }


        /* ===============================
           MAIN
        =============================== */

        .main {

            flex: 1;

            width: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            padding:
                55px 20px 70px;
        }


        .container {

            width: 100%;

            max-width: 950px;

            text-align: center;
        }


        /* ===============================
           HEADING
        =============================== */

        .badge {

            display: inline-block;

            padding:
                8px 16px;

            margin-bottom: 18px;

            border-radius: 50px;

            color: #1678e8;

            background:
                rgba(225,242,255,.8);

            border:
                1px solid
                rgba(130,195,245,.45);

            font-size: 18px;

            font-weight: 700;

            letter-spacing: .8px;
        }


        h1 {

            margin-bottom: 14px;

            color: #102652;

            font-size: clamp(
                38px,
                5vw,
                58px
            );

            line-height: 1.08;

            letter-spacing: -2px;
        }


        h1 span {

            color: #237fe8;
        }


        .subtitle {

            max-width: 600px;

            margin:
                0 auto 42px;

            color: #6c84a4;

            font-size: 15px;

            line-height: 1.7;
        }


        /* ===============================
           OPTIONS
        =============================== */

        .options {

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 20px;

            max-width: 780px;

            margin: 0 auto;
        }


        .option-card {

            position: relative;

            min-height: 270px;

            padding: 32px;

            display: flex;

            flex-direction: column;

            align-items: flex-start;

            justify-content: space-between;

            text-align: left;

            text-decoration: none;

            border-radius: 26px;

            background:
                rgba(255,255,255,.68);

            border:
                1px solid
                rgba(255,255,255,.95);

            box-shadow:
                0 18px 50px
                rgba(55,110,165,.10);

            backdrop-filter:
                blur(20px);

            -webkit-backdrop-filter:
                blur(20px);

            transition:
                transform .3s ease,
                box-shadow .3s ease,
                border-color .3s ease;
        }


        .option-card:hover {

            transform:
                translateY(-7px);

            border-color:
                rgba(80,160,235,.35);

            box-shadow:
                0 25px 60px
                rgba(45,115,180,.16);
        }


        /* ===============================
           ICON
        =============================== */

        .option-icon {

            width: 58px;

            height: 58px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 25px;

            border-radius: 17px;

            background:
                linear-gradient(
                    145deg,
                    #e2f3ff,
                    #cce8ff
                );

            color: #187bea;

            font-size: 25px;

            font-weight: 800;
        }


        .guest .option-icon {

            background:
                linear-gradient(
                    145deg,
                    #e7f9ff,
                    #d4efff
                );
        }


        /* ===============================
           CARD TEXT
        =============================== */

        .option-card h2 {

            margin-bottom: 10px;

            color: #132957;

            font-size: 23px;

            font-weight: 750;
        }


        .option-card p {

            color: #7187a5;

            font-size: 13px;

            line-height: 1.65;
        }


        /* ===============================
           ARROW
        =============================== */

        .card-arrow {

            position: absolute;

            right: 28px;

            bottom: 27px;

            width: 38px;

            height: 38px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background:
                #e7f4ff;

            color: #1678e8;

            font-size: 20px;

            transition:
                transform .25s ease;
        }


        .option-card:hover .card-arrow {

            transform:
                translateX(5px);
        }


        /* ===============================
           FOOTER TEXT
        =============================== */

        .security-note {

            margin-top: 35px;

            color: #7890ad;

            font-size: 12px;
        }


        .security-note span {

            color: #1678e8;

            font-weight: 700;
        }


        /* ===============================
           MOBILE
        =============================== */

        @media (max-width: 700px) {

            .navbar {

                height: 70px;

                padding:
                    0 20px;
            }

            .brand-name {

                font-size: 20px;
            }

            .brand img {

                width: 42px;
                height: 42px;
            }

            .back-home {

                font-size: 12px;
            }

            .main {

                padding:
                    45px 18px 55px;
            }

            .subtitle {

                font-size: 13px;

                margin-bottom: 30px;
            }

            .options {

                grid-template-columns: 1fr;

                max-width: 480px;
            }

            .option-card {

                min-height: 230px;

                padding: 27px;
            }

        }
        footer {
            padding: 35px 5%;

            display: flex;

            justify-content: space-between;
            align-items: center;

            border-top:
                1px solid rgba(160,200,230,.25);

            color: #00040a;

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
            color: #010406;
        }
        /* footer {
                flex-direction: column;
                gap: 25px;
                /* text-align: center; */
            } */

    </style>

</head>


<body>


    <!-- NAVBAR -->

    <header class="navbar">

        <a href="{{ url('/') }}" class="brand">

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


    <!-- MAIN -->

    <main class="main">

        <div class="container">


            <span class="badge">
                ULTIMATE UPI
            </span>


            <h1>
                How do you want to
                <span>get started?</span>
            </h1>


            <p class="subtitle">
                Choose how you want to use Ultimate UPI.
                You can sign in to access your account or
                continue directly without creating an account.
            </p>


            <div class="options">


                <!-- LOGIN -->

                <a
                    href="{{ url('/login') }}"
                    class="option-card"
                >

                    <div>

                        <div class="option-icon">
                            →
                        </div>

                        <h2>
                            Start with Login
                        </h2>

                        <p>
                            Sign in to your Ultimate UPI
                            account and access your saved
                            payment information, transaction
                            history and account features.
                        </p>

                    </div>


                    <div class="card-arrow">
                        →
                    </div>

                </a>


                <!-- WITHOUT LOGIN -->

                <a
                    href="{{ url('/payment') }}"
                    class="option-card guest"
                >

                    <div>

                        <div class="option-icon">
                            ⚡
                        </div>

                        <h2>
                            Start without Login
                        </h2>

                        <p>
                            Continue directly to Ultimate UPI
                            without signing in and explore
                            the available payment features.
                        </p>

                    </div>


                    <div class="card-arrow">
                        →
                    </div>

                </a>


            </div>


            <div class="security-note">

                <span>🔒 Secure</span>
                &nbsp; Your connection is protected by
                Ultimate UPI.

            </div>


        </div>

    </main>


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