 <?php include 'header.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tentang
        <small>input</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">tentang</li>
      </ol>
    </section>
       <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input tentang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url()?>/backend/update_tentang" method="post" enctype="multipart/form-data">
              <?php foreach($tentang as $row){?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Judul</label>
                  <input type="text" class="form-control" placeholder="judul" value="<?php echo $row->judul?>" name="judul" required>
                </div>
                <div class="form-group">
                  <label>Isi </label>
                  <textarea class="ckeditor" id="ckeditor" name="tentang" required=""><?php echo $row->tentang ?></textarea>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <?php }?>
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