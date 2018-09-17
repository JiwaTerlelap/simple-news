 <?php include 'header.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori
        <small>data kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">kategori</li>
      </ol>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="<?php echo base_url()?>backend/kategori" role="button" class="btn btn-primary">Tambah kategori</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>kategori</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($kat as $row){?>
                <tr>
                  <td><?php echo $row->id_kategori?></td>
                  <td><?php echo $row->kategori?></td>
                  <td><a href="<?php echo base_url()?>backend/edit_kat/<?php echo $row->id_kategori?>"><button type="button" class="btn btn-primary" rows="10">Edit</button></a><a href="<?php echo base_url()?>backend/del_kat/<?php echo $row->id_kategori?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
                </tr>
                <?php } ?>
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


