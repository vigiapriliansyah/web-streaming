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
                <form action="<?= base_url('anime/update'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" name="id_anime" value="<?= $anime['id_anime']; ?>">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul ..." value="<?= $anime['judul']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi ..." value="<?= $anime['deskripsi']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <input type="text" name="genre" class="form-control" placeholder="Genre ..." value="<?= $anime['genre']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Rating</label>
                            <input type="text" name="rating" class="form-control" placeholder="Rating ..." value="<?= $anime['rating']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" placeholder="Tahun ..." value="<?= $anime['tahun']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File Video</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file_video" class="custom-file-input" id="exampleInputFileVideo" onchange="displayFileName('exampleInputFileVideo')">
                                    <label class="custom-file-label" for="exampleInputFileVideo"><?= $anime['file_video'] ? $anime['file_video'] : 'Choose file'; ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file_gambar" class="custom-file-input" id="exampleInputFileGambar" onchange="displayFileName('exampleInputFileGambar')">
                                    <label class="custom-file-label" for="exampleInputFileGambar"><?= $anime['file_gambar'] ? $anime['file_gambar'] : 'Choose file'; ?></label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<script>
    function displayFileName(inputId) {
        const fileInput = document.getElementById(inputId);
        const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'Choose file';
        fileInput.nextElementSibling.innerText = fileName;
    }
</script>


<?= $this->endSection(); ?>