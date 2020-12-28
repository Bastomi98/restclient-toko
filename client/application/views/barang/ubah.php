<div class="container">
<br>
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
                        <div class="form-group">
                            <label for="nama_barang">Nama</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?= $barang['nama_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga</label>
                            <input type="text" name="harga_barang" class="form-control" id="harga_barang" value="<?= $barang['harga_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok_barang">Stok</label>
                            <input type="text" name="stok_barang" class="form-control" id="stok_barang" value="<?= $barang['stok_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>