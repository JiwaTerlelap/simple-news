 <?php include 'header.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Iklan
        <small>input</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Iklan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah iklan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url()?>backend/simpan_iklan" enctype="multipart/form-data">
              <div class="box box-primary">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Foto</label>
                  <input type="file" class="form-control" name="gambar" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">link</label>
                  <input type="link" class="form-control" name="link" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">brand</label>
                  <input type="text" class="form-control" name="brand" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">ukuran</label>
                  <select name="ukuran" class="form-control">
                    <option value="728x90px">728 x 90 px</option>
                    <option value="300x250px">300 x 250 px</option>
                  </select>
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
              <h3 class="box-title">Data iklan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>foto</th>
                  <th>brand</th>
                  <th>Link</th>
                  <th>ukuran</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($iklan as $row){?>
                <tr>
                  <td><?php echo $row->id ?></td>
                  <td><img src="<?php echo base_url()?>assets/foto/iklan/<?php echo $row->foto ?>" width="100px"></td>
                <td><?php echo $row->brand ?></td>
                <td><?php echo $row->link ?></td>
                <td><?php echo $row->ukuran ?></td>
                  <td><a href="<?php echo base_url()?>backend/delete_iklan/<?php echo $row->id ?>" role="button" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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