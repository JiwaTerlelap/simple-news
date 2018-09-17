
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/foto/admin/<?php echo $this->session->userdata('foto');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
         <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('backend')?>"><i class="fa fa-circle-o"></i>Home</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('backend/data_berita')?>"><i class="fa fa-circle-o"></i> Berita</a></li>
            <li><a href="<?php echo site_url('backend/data_kategori')?>"><i class="fa fa-circle-o"></i> kategori</a></li>
            <li><a href="<?php echo site_url('backend/add_partner')?>"><i class="fa fa-circle-o"></i> partner</a></li>
            <li><a href="<?php echo site_url('backend/iklan')?>"><i class="fa fa-circle-o"></i> iklan</a></li>
          </ul>
        <li><a href="<?php echo site_url('backend/tentang')?>"><i class="fa fa-user-circle-o"></i> <span>Tentang</span></a></li>
        <li><a href="<?php echo site_url('backend/tambah_admin')?>"><i class="fa fa-user"></i> <span>Add Admin</span></a></li>
    </section>
    <!-- /.sidebar -->
  </aside>
