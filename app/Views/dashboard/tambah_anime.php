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
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/anime">Anime</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">

                <form action="<?= base_url('anime/simpan'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul ..." value="<?= old('judul'); ?>">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi ..." value="<?= old('deskripsi'); ?>">
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
                            <select name="genre[]" class="form-control select2 select2-dark" multiple="multiple" placeholder="Genre ...">
                                <?php
                                foreach ($genre as $option) : ?>
                                    <option value="<?= $option['id_genre']; ?>"><?= $option['genre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <script>
                                $(document).ready(function() {
                                    // Inisialisasi Select2 pada elemen dengan class "select2"
                                    $('.select2').select2();
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Rating</label>
                            <input type="text" name="rating" class="form-control" placeholder="Rating ..." value="<?= old('rating'); ?>">
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" placeholder="Tahun ..." value="<?= old('tahun'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File Video</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file_video" class="custom-file-input" id="exampleInputFile" value="<?= old('file_video'); ?>">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file_gambar" class="custom-file-input" id="exampleInputFile" value="<?= old('file_gambar'); ?>">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('anime'); ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>



<?= $this->endSection(); ?>