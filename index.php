<?php
include('app/config.php');
include("layout/sesion.php");
include("layout/part_one.php");
?>

<script>
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Bienvenido al sistema <?php echo $nombre_session ?> ",
        showConfirmButton: false,
        timer: 2000
    });
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Bienvenido</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <p>contenido del sistema</p>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>


<?php include("layout/part_two.php"); ?>