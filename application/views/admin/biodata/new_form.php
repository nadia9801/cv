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
            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">

                  <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>" id="nama_lengkap" placeholder="" name="nama_lengkap">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lengkap') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input type="text" class="form-control <?php echo form_error('nama_panggilan') ? 'is-invalid':'' ?>" id="nama_panggilan" placeholder="" name="nama_panggilan">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_panggilan') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ttl">TTL</label>
                    <input type="text" class="form-control <?php echo form_error('ttl') ? 'is-invalid':'' ?>" id="ttl" placeholder="" name="ttl">
                    <div class="invalid-feedback">
                        <?php echo form_error('ttl') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>" id="jenis_kelamin" placeholder="" name="jenis_kelamin">
                    <div class="invalid-feedback">
                        <?php echo form_error('jenis_kelamin') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control <?php echo form_error('agama') ? 'is-invalid':'' ?>" id="agama" placeholder="" name="agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('agama') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_telp">No. Telp</label>
                    <input type="text" class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>" id="no_telp" placeholder="" name="no_telp">
                    <div class="invalid-feedback">
                        <?php echo form_error('no_telp') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="resume">Resume</label>
                    <input type="text" class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="resume" placeholder="" name="resume">
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                  </div>
                 

                            
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?php echo form_error('price') ? 'is-invalid':'' ?>" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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