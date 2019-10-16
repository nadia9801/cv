<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div class="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div class="content-wrapper">

		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a class="btn btn-primary" href="<?php echo site_url('admin/biodata/add') ?>">
                        <i class="fa fa-plus"></i>Tambah
                        </a>
                        Biodata
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>Nama Lengkap</th>
                    <th>Nama Panggilan</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Resume</th>
                    <th>Foto</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($biodata as $bio): ?>
                    <tr>
                    <td><?php echo $bio->nama_lengkap ?></td>
                    <td><?php echo $bio->nama_panggilan ?></td>
                    <td><?php echo $bio->ttl ?></td>
                    <td><?php echo $bio->alamat ?></td>
                    <td><?php echo $bio->jenis_kelamin ?></td>
                    <td><?php echo $bio->agama ?></td>
                    <td><?php echo $bio->no_telp ?></td>
                    <td><?php echo $bio->email ?></td>
                    <td><?php echo $bio->resume ?></td>
                    <td><?php echo $bio->foto ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo site_url('admin/biodata/edit/'.$bio->biodata_id) ?>">
                        <i class="fa fa-edit"></i> Edit
                        </a>
                        <a class="btn btn-danger" onclick="deleteConfirm('<?php echo site_url('admin/biodata/delete/'.$bio->biodata_id) ?>')" href="#!" class="btn btn-small text-danger">
                            <i class="fa fa-trash"></i>Hapus 
                        </a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                    </tfoot>
                </table>
                </div>
                <!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
    
</body>
</html>