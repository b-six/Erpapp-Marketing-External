<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. SInar Sosro - Customer Login</title>
    <!-- css -->
    <?php $this->load->view('partials/css');
    ?>
</head>

<body>
    <?php $this->load->view('partials/navbar');
    ?>

    <!-- konten -->

    <!-- form login -->
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <form id="form-login-customer" name="form-login-customer" class="col s8 offset-s2 white padding-login" action="login/login_customer" method="post">
                <div class="row">
                    <h5 class="center col s12">Customer Login</h5>
                </div>
                <?php
                $login = $_GET['login'];
                if ($login == 0) : ?>
                    <div class="row">
                        <div class="col s12">
                            <h6 class="red-text small-text">Email atau password salah. Coba ulangi kembali.</h6>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email-customer" name="email-customer" type="email" class="validate" autocomplete="off">
                        <label for="email-customer">E-Mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password-customer" name="password-customer" type="password" class="validate" autocomplete="off">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button type="submit" id="submit-login-customer" class="waves-effect waves-light btn-small red">Login</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('partials/js');
    ?>
</body>

</html>