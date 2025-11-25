<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Vật tư In ấn - Dashboard</title>
    <link rel="stylesheet" href="./assets/CSS/style.css"> 
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <?php include 'includes/left.php'; ?>
        
        <?php include 'includes/right.php'; ?>

        <!-- Main Content -->
        <main class="main-content">
            <h1>Bảng điều khiển</h1>
            
            <!-- Statistics Cards -->
            <div class="stats-container">
                <div class="stat-card">
                    <h3>Tổng số sản phẩm</h3>
                    <p class="number">10</p>
                 <!--    <i class="fas fa-boxes icon"></i> -->
                </div>
                <div class="stat-card warning">
                    <h3>Hàng sắp hết</h3>
                    <p class="number">2</p>
                 <!--    <i class="fas fa-exclamation-triangle icon"></i> -->
                </div>
                <div class="stat-card">
                    <h3>Đơn in đang chờ</h3>
                    <p class="number">1</p>
                   <!--  <i class="fas fa-clock icon"></i> -->
                </div>
            
            </div>

            <!-- Chart and Warning Section Container -->
            <div class="dashboard-sections">
                <!-- Chart Section -->
                <div class="chart-section">
                    <h2>Tổng quan trạng thái tồn kho</h2>
                    <p class="subtitle">So sánh lượng hàng tồn kho hiện tại so với lượng hàng tồn kho tối thiểu.</p>
                    <div class="chart-container">
                        <!-- Chart will be styled with CSS -->
                        <div class="chart">
                            <!-- Chart bars will be added with CSS -->
                        </div>
                    </div>
                </div>

                <!-- Low Stock Warning Section -->
                <div class="warning-section">
                    <h2>Cảnh báo sắp hết hàng</h2>
                <p class="subtitle">Các mặt hàng này đã xuống dưới mức tồn kho tối thiểu.</p>
                <div class="warning-items">
                    <div class="warning-item">
                        <div class="item-info">
                            <h4>Giấy Fort A4 68</h4>
                            <p class="code">MAT001</p>
                        </div>
                        <div class="stock-level">
                            <span class="current">45</span>
                            <span class="separator">/</span>
                            <span class="minimum">50</span>
                        </div>
                    </div>
                    <div class="warning-item">
                        <div class="item-info">
                            <h4>Giấy Fort A4 70</h4>
                            <p class="code">MAT005</p>
                        </div>
                        <div class="stock-level">
                            <span class="current">18</span>
                            <span class="separator">/</span>
                            <span class="minimum">20</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>