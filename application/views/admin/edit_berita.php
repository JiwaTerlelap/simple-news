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
              <h3 class="box-title">Input Berita</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url()?>backend/update_berita" enctype="multipart/form-data">
              <div class="box box-primary">
                <?php foreach($berita as $row){?>
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" class="form-control" placeholder="judul" name="id" value="<?php echo $row->id?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Judul</label>
                  <input type="text" class="form-control" placeholder="judul" name="judul" value="<?php echo $row->judul?>" required>
                </div>
                <div class="form-group">
                  <label >Kategori</label>
                  <select name="kat" class="form-control" required="">
                    <option value="">Kategori</option>
                    <?php foreach ($kat as $rows):
                      ?>
                    <option  value="<?php echo $rows->id_kategori?>"><?php echo $rows->kategori?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Isi berita</label>
                  <textarea class="ckeditor" id="ckeditor" name="berita"><?php echo $row->berita ?></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="pen" value="ADMIN">  
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">gambar</label>
                  <br>
                  <img src="<?php echo base_url()?>/assets/foto/berita/<?php echo $row->foto ?>" width="100"  alt="">
                  <br>
                  <br>
                  <input type="file" name="gambar" required>
                </div>
              </div>
              <?php } ?>
              <!-- /.box-body -->

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