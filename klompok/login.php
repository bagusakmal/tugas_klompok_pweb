<?php include('header.php') ?>

<body>

    <!-- Konten -->
    <div class="container row mx-auto mt-3">
        <div class="col-5 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Login</h3>
                </div>
                <div class="card-body">
                    <form action="proses/login.php" method="POST">
                        <div class="mb-3">
                            <label for="inputUsername" class="form-label">Username</label>
                            <input type="text" placeholder="Input disini ..." class="form-control" id="inputUsername" name="username">
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" placeholder="Input disini ..." class="form-control" id="inputPassword" name="password">
                        </div>
                        <hr>
                        <a href="register.php" style="display: block; margin-bottom:10px;">Belum punya akun? Daftar di sini!</a>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <?php include 'notif.php'; ?>
</body>

</html>