<?= $this->extend('/layout/adminTemplate'); ?>
<?= $this->section('konten'); ?>


<!-- <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__wobble" src="<?= base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTELogo" height="60" width="60">
</div> -->

<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?= base_url('assets/admin.png'); ?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Admin</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/anime" id="sidebar-nav" class="nav-link active">
          <i class="nav-icon fa fa-plus"></i>
          <p>
            Anime
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Panel Konten</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/anime">Anime</a></li>
            <li class="breadcrumb-item active">Kelola Konten</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card-body">
        <a href="anime/tambah_anime" class="btn btn-info"><i class="nav-icon fa fa-plus"></i></a>
        <div class="mt-2">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Tahun</th>
                <th>Video</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($anime as $key) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $key->judul; ?></td>
                  <td><?= $key->deskripsi; ?></td>
                  <td><?= $key->genres; ?></td>
                  <td><?= $key->rating; ?></td>
                  <td><?= $key->tahun; ?></td>
                  <td><button onclick="openVideo('<?= base_url('uploud/video/' . $key->file_video); ?>')" class="btn btn-secondary">Buka Video</button></td>
                  <td><img src="<?= base_url('uploud/images/' . $key->file_gambar); ?>" width="50px" height="50px" alt=""></td>
                  <td>
                    <a href="anime/edit/<?php echo $key->id_anime; ?>" class="btn btn-warning">Edit</a> |
                    <a href="#" url="anime/delete/ <?= $key->id_anime; ?>" class="btn btn-danger" id="delete">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
</div>
<script>
  function openVideo(videoUrl) {
    window.open(videoUrl, '_blank');
  }
</script>



<?= $this->endSection(); ?>