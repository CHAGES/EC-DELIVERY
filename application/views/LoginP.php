
<body>
    <img class="wave" src="<?= base_url('assets/img/wave.png'); ?>" alt="">
    <div class="container">
        <div class="img">
            <img src="<?= base_url('assets/img/truck-l.svg'); ?>" alt="">
        </div>
        <div class="login-container">
            <form action="" method="post">
                <img class="avatar" src="<?= base_url('assets/img/user.svg'); ?>" alt="">
                <h2>Bienvenido</h2><br>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Nombre de usuario</h5>
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="input-div two ">
                    <div class="i">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Correo electronico</h5>
                        <input type="email" class="input">
                    </div>
                </div>
                <div class="input-div two ">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Contraseña</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                <div class="input-div two ">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Confirmar contraseña</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                <br>
                <a href="">¿Ya tienes una cuenta?</a>
                <input type="submit" class="btn" value="Registrarse">
            </form>
        </div>
    </div>
    <script src="<?= base_url('assets/js/lg.js'); ?>"></script>
</body>
</html>