<?php 
$id = $_SESSION['admin']['id_member'];
$hasil_profil = $lihat->member_edit($id);
?>
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start -->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar']; ?>" class="img-circle" width="100" height="100"></a></p>
            <h5 class="centered"><?php echo $hasil_profil['nm_member']; ?></h5>
            <h5 class="centered">( <?php echo $hasil_profil['NIK']; ?> )</h5>
            
            <li class="mt">
                <a href="index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Master <i class="fa fa-angle-down"></i></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=barang">Barang</a></li>
                    <li><a href="index.php?page=kategori">Kategori</a></li>
                    <li><a href="index.php?page=user">User</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Transaksi <i class="fa fa-angle-down"></i></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=jual">Transaksi Jual</a></li>
                    <li><a href="index.php?page=laporan">Laporan Penjualan</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cog"></i>
                    <span>Setting <i class="fa fa-angle-down"></i></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=pengaturan">Pengaturan Toko</a></li>
                </ul>
            </li>
            <li>
                <a class="logout" onclick="return confirm('Ingin Logout?');" href="logout.php">Logout</a>
            </li>
        </ul>
        <!-- sidebar menu end -->
    </div>
</aside>
<!-- sidebar end -->
