<?php require_once('header.php') ?>
    <div class="container-fluid">
        <div class="row">
        <?php require_once('nav.php') ?>
            <div class="col-10">
                <h2>Register</h2>
                <form action="proses/register.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="namaHelp" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>

                    <div class="mb4">
                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2 " name="confirm_password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('footer.php') ?>