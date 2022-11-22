<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-title" content="Haweb.vn">
    <title>Comming Soon | Haweb.vn</title>

    <style>
        * {
            font-family: 'montserrat', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .page {
            background: #f1f1f1;
            display: flex;
            flex-wrap: wrap;
            position: relative;
        }

        .col {
            flex: 1;
            height: 100vh;
            position: relative;
        }

        .newsletter-col {
            background: url(https://fadzrinmadu.github.io/hosted-assets/responsive-coming-soon-page-with-awesome-newsletter-html-css-and-js/bg.png) no-repeat center;
            background-size: cover;
        }

        .time {
            color: #fff;
            text-transform: uppercase;
            width: 90%;
            display: flex;
            justify-content: center;
        }

        .middle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .time span {
            padding: 0 14px;
            font-size: 10px;
        }

        .time span div {
            font-size: 40px;
        }

        .newslatter {
            width: 90%;
        }

        .newslatter h4 {
            font-style: italic;
            font-size: 12px;
        }

        .newslatter input,
        .newslatter button {
            display: block;
            margin: 12px auto;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            padding: 14px 20px;
            border-radius: 30px;
            border: 1px solid #ddd;
            outline: none;
            border: none;
        }

        .newslatter-button {
            background: linear-gradient(125deg, #3498db, #34495e);
            color: #fff;
            cursor: pointer;
            transition: 0.4s;
        }

        .newslatter-button:hover {
            opacity: 0.7;
        }

        a#back_home {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 99;
            padding: 10px;
            border-radius: 5px;
            background: #000;
            color: #fff;
            text-decoration: none;
            font-size: 13px;
        }

        @media screen and (max-width: 900px) {
            .col {
                flex: 100%;
            }

            a#back_home {
                background: #fFF;
                color: #000;
            }
        }
    </style>
    <script>
        window.console = window.console || function(t) {};
    </script>
</head>

<body translate="ano">
    <div class="page">
        <a id="back_home" href="<?php echo site_url() ?>" title="Trang chủ">Trang chủ</a>
        <div class="newsletter-col col">
            <div class="newslatter middle">
                <h2>We Will Coming Soon</h2>
                <h4>Subscribe to get notification when we start</h4>
                <form>
                    <input type="text" placeholder="Enter Your Email" />
                    <button type="button" class="newslatter-button">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>