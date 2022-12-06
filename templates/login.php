<!-- Rights-->
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Forms</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="../../cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="../../css2?family=Libre+Baskerville&amp;family=Work+Sans:wght@300;400;600&amp;display=swap">
    <link rel="stylesheet" href="<?= $assets ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/fonts.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/style.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>


    <section class="section-lg bg-white">
        <div class="container">
            <h6>Login form</h6>
        </div>
        <section class="section section-md bg-gray-800 context-dark">
            <div class="container">
                <div class="box-1">
                    <h4>Sign In</h4>
                    <form class="rd-form rd-form-small">
                        <div class="form-wrap">
                            <input class="form-input" id="login-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="login-email">E-mail</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                            <label class="form-label" for="login-password">Password</label>
                        </div>
                        <div class="form-wrap">
                            <button class="button button-primary button-winona" type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>

    <!-- Javascript-->
    <script src="<?= $assets ?>/js/core.min.js"></script>
    <script src="<?= $assets ?>/js/script.js"></script>
</body>

</html>