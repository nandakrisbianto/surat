 
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?=base_url('aplikasi/dashboard')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Surat Keluar</div>
                            <a class="nav-link" href="<?=base_url('aplikasi/suratkeluar/data')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Data Surat
                            </a>
                            <a class="nav-link" href="<?=base_url('aplikasi/suratkeluar/input')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Input Surat
                            </a>
                            <div class="sb-sidenav-menu-heading">Surat Masuk</div>
                            <a class="nav-link" href="<?=base_url('aplikasi/suratmasuk/data')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-download"></i></div>
                                Data surat
                            </a>
                            <a class="nav-link" href="<?=base_url('aplikasi/suratmasuk/input')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-upload"></i></div>
                                Input Surat
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?=$this->session->nama;?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

<?php
$url1=$this->uri->segment(1);
$url2=$this->uri->segment(2);
$url3=$this->uri->segment(3);
?>

                    <h1 class="mt-4"><?=$url1?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item "><a href="<?=base_url('aplikasi/dashboard')?>">Dashboard</a></li>
                            <?php if ($url2): ?>
                            <li class="breadcrumb-item active"><?=$url2;?></li>
                            <?php endif;?>
                            <?php if ($url3): ?>
                            <li class="breadcrumb-item active"><?=$url3;?></li>
                            <?php endif;?>
                        </ol>
