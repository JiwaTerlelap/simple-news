 <?php include 'header.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Partner
        <small>input</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">partner</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Partner</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url()?>backend/simpan_part" enctype="multipart/form-data">
              <div class="box box-primary">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">pict partner</label>
                  <input type="file" class="form-control" name="gambar" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Link Website</label>
                  <input type="text" class="form-control" name="link" required>
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data partner</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>partner</th>
                  <th>Link Website</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($part as $row){?>
                <tr>
                  <td><?php echo $row->id ?></td>
                  <td><img src="<?php echo base_url()?>assets/foto/partner/<?php echo $row->foto ?>" width="100px"></td>
                <td><?php echo $row->link ?></td>
                  <td><a href="<?php echo base_url()?>backend/delete_part/<?php echo $row->id ?>" role="button" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
<?php include 'footer.php';?>