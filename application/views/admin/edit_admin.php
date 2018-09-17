 <?php include 'header.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        edit
        <small>input</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($admin as $row){?>
            <form role="form" method="post" action="<?php echo base_url()?>backend/update_admin" enctype="multipart/form-data">
                <div class="box box-primary">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">username</label>
                  <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $row->username?>" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" class="form-control" placeholder="email" value="<?php echo $row->email?>" name="email" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No hp</label>
                  <input type="number" class="form-control" placeholder="No hp" value="<?php echo $row->no_hp?>" name="nohp" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">umur</label>
                  <input type="text" class="form-control" placeholder="umur" name="umur"  value="<?php echo $row->umur?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea class="form-control" name="alamat"   required><?php echo $row->alamat?></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="by" value="<?php echo $this->session->userdata('username');?>">  
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row->id?>">  
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">foto admin </label>
                  <input type="file" name="gambar" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <?php }?>
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