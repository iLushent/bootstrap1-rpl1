<?php require_once('header.php') ?>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-10">
                <h2>Data Produk</h2>
                <div><button type="button" class="btn btn-primary">Tambah Produk</button></div>
                <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama produk</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Foto Produk</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="align-middle">1</th>
                    <td class="align-middle">laptop Geyming</td>
                    <td class="align-middle">Rp. 69.000.000</td>
                    <td><img src="nitro.jpg" width="75px"></td>
                    <td><button type="button" class="btn btn-success">Edit produk</button> <button type="button" class="btn btn-danger">Hapus produk</button></td>
                    </tr>

                    <tr>
                    <th scope="row" class="align-middle">2</th>
                    <td class="align-middle">laptop Geyming</td>
                    <td class="align-middle">Rp. 69.000.000</td>
                    <td><img src="nitro.jpg" width="75px"></td>
                    <td><button type="button" class="btn btn-success">Edit Produk
                    </button> <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                    </tr>

                    <tr>
                    <th scope="row" class="align-middle">3</th>
                    <td class="align-middle">laptop Geyming</td>
                    <td class="align-middle">Rp. 69.000.000</td>
                    <td><img src="nitro.jpg" width="75px"></td>
                    <td><button type="button" class="btn btn-success">Edit Produk</button> <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require_once('footer.php') ?>