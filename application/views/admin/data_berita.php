 <?php include 'header.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Berita
        <small>data berita</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">berita</li>
      </ol>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="<?php echo base_url()?>backend/berita" role="button" class="btn btn-primary">Tambah berita</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>judul</th>
                  <th>isi</th>
                  <th>foto</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($berita as $row):
                      $ambil = $row->berita;
                      $ber = substr($ambil, 0, 150);
                    ?>
                <tr>
                  <td><?php echo $row->judul ?></td>
                  <td><?php echo $ber ?>.....</td>
                  <td><img src="<?php echo base_url()?>/assets/foto/berita/<?php echo $row->foto ?>?>" height="50" width="100"></td>
                  <td><a href="<?php echo base_url()?>backend/edit_berita/<?php echo $row->id?>"><button type="button" class="btn btn-primary" rows="10"><i class="fa fa-edit"></i></button></a><a href="<?php echo base_url()?>backend/delete_berita/<?php echo $row->id?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                </tr>
              <?php endforeach;?>
              </tbody>
              
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<?php include 'footer.php';?>