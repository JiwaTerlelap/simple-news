 <?php include 'header.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>data Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="<?php echo base_url()?>backend/tambah_admin" role="button" class="btn btn-primary">Tambah Admin</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>username</th>
                  <th>email</th>
                  <th>No hp</th>
                  <th>Alamat</th>
                  <th>Add by</th>
                  <th>umur</th>
                  <th>foto</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($admin as $row){?>
                <tr>
                  <td><?php echo $row->username ?></td>
                  <td><?php echo $row->email ?></td>
                  <td><?php echo $row->no_hp ?></td>
                  <td><?php echo $row->alamat ?></td>
                  <td><?php echo $row->add_by ?></td>
                  <td><?php echo $row->umur ?></td>
                  <td><img src="<?php echo base_url()?>/assets/foto/admin/<?php echo $row->foto ?>?>" height="50" width="100"></td>
                  <td><a href="<?php echo base_url()?>backend/edit_admin/<?php echo $row->id ?>"><button type="button" class="btn btn-primary" rows="10"><i class="fa fa-edit"></i></button></a><a href="<?php echo base_url()?>backend/delete_admin/<?php echo $row->id ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                </tr>
                <?php }?>
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