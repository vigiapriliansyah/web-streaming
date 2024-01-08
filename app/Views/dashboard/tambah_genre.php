<?= $this->extend('/layout/adminTemplate'); ?>
<?= $this->section('konten'); ?>


<!-- <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__wobble" src="<?= base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTELogo" height="60" width="60">
</div> -->

<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url('/assets/admin.png'); ?>" class="img-circle elevation-2" alt="User Image">
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
                <a href="/anime" id="sidebar-nav" class="nav-link">
                    <i class="nav-icon fa fa-plus"></i>
                    <p>
                        Anime
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/genre" id="sidebar-nav" class="nav-link ">
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
                        <li class="breadcrumb-item"><a href="/anime">Genre</a></li>
                        <li class="breadcrumb-item active">Tambah Konten</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                <form action="<?= base_url('genre/simpan'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">Tambahkan genre</label>
                            <input type="text" name="genre" class="form-control" placeholder="Genre ..." value="<?= old('genre'); ?>">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('genre'); ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>



<?= $this->endSection(); ?>