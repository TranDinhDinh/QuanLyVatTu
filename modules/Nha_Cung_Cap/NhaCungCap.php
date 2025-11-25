<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà cung cấp - Quản lý Vật tư In ấn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <?php include 'includes/left.php'; ?>
        
        <?php include 'includes/right.php'; ?>

        <!-- Main Content -->
        <main class="main-content">
            <h1>Danh sách nhà cung cấp</h1>
            <p class="subtitle">Quản lý thông tin nhà cung cấp vật liệu in ấn.</p>

            <div class="stats-container">
                <div class="stat-card">
                    <h3>Tổng số nhà cung cấp</h3>
                    <p class="number">5</p>
                </div>
                <div class="stat-card">
                    <h3>Nhà cung cấp đang hoạt động</h3>
                    <p class="number">5</p>
                </div>
                <div class="stat-card">
                    <h3>Đơn đặt hàng chờ xử lý</h3>
                    <p class="number">3</p>
                </div>
            </div>

            <!-- Suppliers Table -->
            <div style="background:#fff;padding:18px;border-radius:10px;box-shadow:0 6px 18px rgba(21,32,43,0.06);">
                <table style="width:100%;border-collapse:collapse">
                    <thead>
                        <tr style="text-align:left;color:#556b77;font-weight:600;border-bottom:1px solid #e6eef5">
                            <th style="padding:10px">Mã nhà cung cấp</th>
                            <th style="padding:10px">Tên công ty</th>
                            <th style="padding:10px">Địa chỉ</th>
                            <th style="padding:10px">Điện thoại</th>
                            <th style="padding:10px">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding:10px">SUP001</td>
                            <td style="padding:10px">Công ty A</td>
                            <td style="padding:10px">Hà Nội</td>
                            <td style="padding:10px">02438123456</td>
                            <td style="padding:10px">Hoạt động</td>
                        </tr>
                        <tr style="background:#fbfbfc">
                            <td style="padding:10px">SUP002</td>
                            <td style="padding:10px">Công ty B</td>
                            <td style="padding:10px">TP. Hồ Chí Minh</td>
                            <td style="padding:10px">02856789012</td>
                            <td style="padding:10px">Hoạt động</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
