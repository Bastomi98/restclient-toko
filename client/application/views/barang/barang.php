<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah
                Data Barang</a>
        </div>
    </div> <br>
        <div class="card">
        <div class="card-header">
        <h3>Data Barang</h3>
                </div>
        <div class="card-body">
            <?php if (empty($barang)) : ?>
                <div class="alert alert-danger" role="alert">
                data barang tidak ditemukan.
                </div>
            <?php endif; ?>
  <div class="table-responsive-sm">
  <table id="example1" class="table-active table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAMA</th>
      <th>HARGA</th>
      <th>STOK</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($barang as $brg) : ?>
    <tr>
      <td><?= $brg['id_barang']; ?></td>
      <td><?= $brg['nama_barang']; ?></td>
      <td><?= $brg['harga_barang']; ?></td>
      <td><?= $brg['stok_barang']; ?></td>
      <td>
      <a href="<?= base_url(); ?>barang/detail/<?= $brg['id_barang']; ?>"
                        class="badge badge-primary">Detail</a>  
      <a href="<?= base_url(); ?>barang/ubah/<?= $brg['id_barang']; ?>"
                        class="badge badge-success">Edit</a>
      <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_barang']; ?>"
                        class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>    
  </table>
  </div>
  </div>
  </div>

    