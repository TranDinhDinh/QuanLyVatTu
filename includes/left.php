<!-- Left Sidebar -->
<?php 
$current_page = basename($_SERVER['PHP_SELF']);
?>
<aside class="sidebar left-sidebar">
	<div class="logo">
		<i class="fas fa-print"></i>
		<span>Quản lý Vật tư</span>
	</div>
	<nav>
		<ul>
			<li<?php echo ($current_page == 'index.php') ? ' class="active"' : ''; ?>><a href="/QUANLYVATTU_INAN/index.php"><i class="fas fa-chart-line"></i> Bảng điều khiển</a></li>
			<li<?php echo ($current_page == 'VatTu.php') ? ' class="active"' : ''; ?>><a href="/QUANLYVATTU_INAN/modules/Vat_TU/VatTu.php"><i class="fas fa-box"></i> Vật liệu </a> </li>
			<li<?php echo ($current_page == 'NhaCungCap.php') ? ' class="active"' : ''; ?>><a href="/QUANLYVATTU_INAN/modules/Nha_Cung_Cap/NhaCungCap.php"><i class="fas fa-truck"></i> Nhà cung cấp</a></li>
			<li<?php echo ($current_page == 'DonDatin.php') ? ' class="active"' : ''; ?>><a href="/QUANLYVATTU_INAN/modules/Don_Dat_In/DonDatin.php"><i class="fas fa-shopping-cart"></i> Đơn đặt in</a></li>
		</ul>
	</nav>
</aside>