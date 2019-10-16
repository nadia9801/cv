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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $biodata->biodata_id ?>" />
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input value="<?php echo $biodata->nama_lengkap ?>" type="text" class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>" id='nama_lengkap' placeholder='nama_lengkap' name='nama_lengkap'>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lengkap') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input value="<?php echo $biodata->nama_panggilan ?>" type="text" class="form-control <?php echo form_error('nama_panggilan') ? 'is-invalid':'' ?>" id='nama_panggilan' placeholder='nama_panggilan' name='nama_panggilan'>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_panggilan') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ttl">TTL</label>
                    <input type="text" value="<?php echo $biodata->ttl ?>" class="form-control <?php echo form_error('ttl') ? 'is-invalid':'' ?>" id="ttl" placeholder="" name="ttl">
                    <div class="invalid-feedback">
                        <?php echo form_error('ttl') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" value="<?php echo $biodata->alamat?>" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                  </div>
                  
                  

                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis_Kelamin</label>
                    <input type="text" value="<?php echo $biodata->jenis_kelamin ?>" class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>" id="jenis_kelamin" placeholder="jenis_kelamin" name="jenis_kelamin">
                    <div class="invalid-feedback">
                        <?php echo form_error('jenis_kelamin') ?>
                    </div>
                  </div>
                  
                 
                
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" value="<?php echo $biodata->agama ?>" class="form-control <?php echo form_error('agama') ? 'is-invalid':'' ?>" id="agama" placeholder="agama" name="agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('agama') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_telp">No. Telp</label>
                    <input type="text" value="<?php echo $biodata->no_telp ?>" class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>" id="no_telp" placeholder="no_telp" name="no_telp">
                    <div class="invalid-feedback">
                        <?php echo form_error('no_telp') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo $biodata->email ?>" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="resume">Resume</label>
                    <textarea class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="editor1" style="width: 100%" name="resume"><?php echo $biodata->resume ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                  </div>
               
                  <div class="form-group">
                    <label for="foto">Foto</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/img/about/'. $biodata->foto ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $biodata->foto ?>" />
                        <input type="file" class="custom-file-input <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" name="foto">
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
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Kembali</button>
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