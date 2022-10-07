<?php $p_session = \Config\Services::session()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Donut</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/login-base.css">
    <link rel="stylesheet" href="./assets/css/login-main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page-login">
        <!-- Header Begin-->
        <header class="header">
            <div class="grid">
                <div class="header__navbar">
                    <div class="logo">
                        <a href="<?= base_url().'/home' ?>" class="logo-link">
                            <img src="./assets/img/logo-no-color.png" alt="" class="logo-img">
                        </a>
                    </div>
                    <div class="navbar__item">
                        <span class="navbar__item-contact">Need help? Contact us</span>
                        <a href="" class="navbar__item-contact-link">
                            <i class="navbar__item-contact-link-icon fa-brands fa-vk"></i>
                        </a>
                        <a href="" class="navbar__item-contact-link-icon navbar__item-contact-link">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>
                        <a href="" class="navbar__item-contact-link-icon navbar__item-contact-link">
                            <i class="fa-brands fa-telegram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End-->

        <!-- Container Begin-->

        <div class="container">
            <!-- LOGIN -->
            <div class="container__box" id="login-box">
                <form name="login-form" method="post">
                    <?php if($p_session->get('success')): ?>
                        <div ><?= $p_session->get('success') ?></div>
                        <?php $p_session->remove('success')?>
                    <?php endif ?>
                    <h2>LOGIN</h2>
                    <?php if(isset($validation)): ?>
                        <div > <?= $validation->listErrors()?></div>
                    <?php endif?>
                    
                    <input type="text" class="form-input login-name" placeholder="Enter username" name = "username">
                    <input type="password" class="form-input login-password" placeholder="Enter password" name = "password">
                    <?php if(isset($loginButton)): ?>
                        <div>
                            <a href="<?= filter_var($loginButton, FILTER_SANITIZE_URL) ?>">Login with Google</a>
                        </div>
                    <?php endif ?>
                    <a href="" class="login-pass-forget">Forget password?</a>
                    <input type="submit" class="btn form-btn" value="Login">
                </form>
                <p class="form-nav">Don't have an account? <a class="form-nav-link" href="<?= base_url().'/register' ?>">Register</a></p>
            </div>

        </div>
        <!-- Container End-->

        <!-- Footer Begin-->
        <footer class="footer">
            <p class="footer-copyright">Copyright @wework 2022 | Privacy Policy</p>
        </footer>
        <!-- Footer End-->
    </div>    

    <!-- <script>
        function navRegis(){
            var formRegis=document.getElementById("regis-box");
            var formLogin=document.getElementById("login-box");
            
            formRegis.style.display="block";
            formLogin.style.display="none";
        }

        function navLogin(){
            var formRegis=document.getElementById("regis-box");
            var formLogin=document.getElementById("login-box");
            
            formRegis.style.display="none";
            formLogin.style.display="block";
        }
    </script> -->
</body>
</html>