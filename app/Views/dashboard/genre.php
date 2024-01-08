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
                <a href="/anime" id="sidebar-nav" class="nav-link ">
                    <i class="nav-icon fa fa-plus"></i>
                    <p>
                        Anime
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/genre" id="sidebar-nav" class="nav-link active">
                    <i class="nav-icon fa fa-plus"></i>
                    <p>
                        Genre
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
                        <li class="breadcrumb-item"><a href="/genre">Genre</a></li>
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
                <div class="mt-2">
                    <a href="genre/tambah_genre" class="btn btn-info"><i class="nav-icon fa fa-plus"></i> Tambah Genre</a>
                </div>

                <div class="mt-2">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Genre</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (is_array($genres) && !empty($genres)) : ?>
                                <?php $no = 1;
                                foreach ($genres as $genre) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $genre['genre']; ?></td>
                                        <td>
                                            <a href="<?= base_url('genre/edit/' . $genre['id_genre']); ?>" class="btn btn-warning">Edit</a> |
                                            <a href="#" url="genre/delete/<?= $genre['id_genre']; ?>" class="btn btn-danger" id="delete">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="3">Tidak ada data genre.</td>
                                </tr>
                            <?php endif; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>



<?= $this->endSection(); ?>