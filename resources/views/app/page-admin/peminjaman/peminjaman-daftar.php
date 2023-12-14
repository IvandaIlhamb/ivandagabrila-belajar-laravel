<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Peminjaman</h3>
        <p class="text-subtitle text-muted">
          Halaman ini menampilkan daftar peminjaman buku yang dilakukan oleh member.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Peminjaman
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-body">
        <button type="button" 
          class="btn icon icon-left btn-primary" 
          data-bs-toggle="modal"
          data-bs-target="#Tambah"
        >
          <i class="fas fa-plus-circle"></i> Tambah Peminjaman
        </button>
      </div>
      <div class="card-body">
        <table class="table table-hover" id="table1">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID</th>
              <th>Judul</th>
              <th>Nama Peminjam</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Jatuh Tempo</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($koneksi, "SELECT peminjaman.id_peminjaman, buku.judul, member.nama, peminjaman.tgl_pinjam, peminjaman.tgl_jatuh_tempo, peminjaman.status FROM ((peminjaman INNER JOIN buku ON peminjaman.id_bukuFK = buku.id_buku) INNER JOIN member ON peminjaman.id_memberFK = member.id_member)");
            while ($list_pinjam = mysqli_fetch_array($query)) {
              $no++
                ?>
              <tr>
                <td>
                  <?php echo $no; ?>
                </td>
                <td>
                  <?php echo $list_pinjam['id_peminjaman']; ?>
                </td>
                <td>
                  <?php echo $list_pinjam['judul']; ?>
                </td>
                <td width="20%">
                  <?php echo $list_pinjam['nama']; ?>
                </td>
                <td>
                  <?php echo date('d-m-Y', strtotime($list_pinjam['tgl_pinjam'])); ?>
                </td>
                <td width="15%">
                  <?php echo date('d-m-Y', strtotime($list_pinjam['tgl_jatuh_tempo'])); ?>
                </td>
                <td  width="5%">
                  <?php
                      if ($list_pinjam['status'] == 'Dipinjam') {
                        echo "<span class='badge bg-info'>".$list_pinjam['status']."</span>";   
                      } else {
                        echo "<span class='badge bg-success'>".$list_pinjam['status']."</span>";
                      }
                    ?>
                    <!-- <span class="badge bg-info">Dipinjam</span> -->
                </td>
                <td width="15%">
                  <!-- <span class="badge bg-success">X</span> -->
                  <a href="" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#Update<?php echo $list_pinjam['id_peminjaman']; ?>"><i class="bi bi-pencil-square"></i></a>
                  <a href="" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#Hapus<?php echo $list_pinjam['id_peminjaman']; ?>"><i class="bi bi-trash-fill"></i></a>
                </td>
              </tr>
            <?php
              include('modal-update.php');
              include('modal-hapus.php');
              } 
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
<!-- Modal Tambah dan Edit Buku-->
<?php 
  include('modal-tambah.php'); 
?>
</div>