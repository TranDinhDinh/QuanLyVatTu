<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đơn đặt in - Quản lý Vật tư In ấn</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
	<div class="container">
		<?php include 'includes/left.php'; ?>
		<?php include 'includes/right.php'; ?>

		<!-- Main Content -->
		<main class="main-content">
			<h1>Đơn đặt in</h1>
			<p class="subtitle">Danh sách đơn đặt in và trạng thái xử lý.</p>

			<div class="stats-container">
				<div class="stat-card">
					<h3>Tổng số đơn</h3>
					<p class="number">4</p>
				</div>
				<div class="stat-card">
					<h3>Đơn chờ xử lý</h3>
					<p class="number">1</p>
				</div>
				<div class="stat-card">
					<h3>Đơn đã hoàn thành</h3>
					<p class="number">3</p>
				</div>
			</div>

			<!-- Example table (placeholder) -->
			<div style="background:#fff;padding:18px;border-radius:10px;box-shadow:0 6px 18px rgba(21,32,43,0.06);">
				<table style="width:100%;border-collapse:collapse">
					<thead>
						<tr style="text-align:left;color:#556b77;font-weight:600;border-bottom:1px solid #e6eef5">
							<th style="padding:10px">Mã đơn</th>
							<th style="padding:10px">Khách hàng</th>
							<th style="padding:10px">Ngày</th>
							<th style="padding:10px">Trạng thái</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="padding:10px">ORDER-001</td>
							<td style="padding:10px">Công ty A</td>
							<td style="padding:10px">2025-11-08</td>
							<td style="padding:10px">Đang xử lý</td>
						</tr>
						<tr style="background:#fbfbfc">
							<td style="padding:10px">ORDER-002</td>
							<td style="padding:10px">Cửa hàng B</td>
							<td style="padding:10px">2025-11-05</td>
							<td style="padding:10px">Hoàn thành</td>
						</tr>
					</tbody>
				</table>
			</div>
		</main>
	</div>
</body>
</html>