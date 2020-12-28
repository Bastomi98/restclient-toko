<div class="container">

    <br>
            <div class="card mb3">
                <div class="card-header">
                    Form Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_barang">ID</label>
                            <input type="text" name="id_barang" class="form-control" id="id_barang">
                            <small class="form-text text-danger"><?= form_error('id'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga</label>
                            <input type="text" name="harga_barang" class="form-control" id="harga_barang">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok_barang">Stok</label>
                            <input type="text" name="stok_barang" class="form-control" id="stok_barang">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>