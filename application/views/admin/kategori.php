 <?php include 'header.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Berita
        <small>input</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Berita</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url()?>backend/simpan_kat" enctype="multipart/form-data">
              <div class="box box-primary">
              <div class="box-body">
                <div class="form-group">
                  <label >ID</label>
                  <?php foreach($kategori as $row){?>
                  <input type="text" class="form-control" placeholder="ID" name="id" value="<?php echo $row->id?>" required readonly="">
                  <?php } ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama kategory</label>
                  <input type="text" class="form-control" placeholder="kategori" name="kat" required>
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
        </div>
        <!--/.col (left) -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php include 'footer.php';?>