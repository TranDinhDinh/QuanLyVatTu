<?php
include_once __DIR__.'/../../DB.php';
include_once __DIR__.'/../../classes/userVattu.php';
$vattus = Vattu::All();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vật liệu - Quản lý Vật tư In ấn</title>
    <link rel="stylesheet" href="../../assets/CSS/style.css">
    <link rel="stylesheet" href="../../assets/CSS/vattu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <?php include '../../includes/left.php'; ?>
        <?php include '../../includes/right.php'; ?>


        <!-- Main Content -->
        <main class="main-content">
            <h1>Danh sách vật liệu</h1>
                <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert-success">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php unset($_SESSION['message']); ?>
                <?php endif; ?>
            <a href="/QUANLYVATTU_INAN/modules/Vat_TU/addVT.php" class="add-button"><i class="fas fa-plus"></i> Thêm mới</a>
       
            <!-- Material Table -->
            <div class="material-table-container">

                <?php if (count($vattus) > 0){ ?>

                <table class="material-table">
                    <thead>
                        <tr>
                            <th>Mã vật liệu</th>
                            <th>Tên vật tư</th>
                            <th>DVT</th>
                            <th>Giá nhập</th>
                            <th>Giá bán</th>
                            <th>Số lượng</th>
                            <th>Ngưỡng tối thiểu</th>
                            <th>Trạng thái</th>
                            <th>Nhà cung cấp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($vattus as $vattu){ ?>
                        <tr>
                            <td><?php echo $vattu['ma_VT'] ?></td>
                            <td><?php echo $vattu['ten_VT'] ?></td>
                            <td><?php echo $vattu['DVT'] ?></td>
                            <td><?php echo $vattu['giaNhap'] ?></td>
                            <td><?php echo $vattu['giaBan'] ?></td>
                            <td><?php echo $vattu['soLuong'] ?></td>
                            <td><?php echo $vattu['nguongToiThieu'] ?></td>
                            <td><?php echo $vattu['trangThaiVT'] ?></td>
                            <td><?php echo $vattu['ten_NCC'] ?></td>
                            <td class="action-cell">
                                <a href="/QUANLYVATTU_INAN/modules/Vat_TU/editVT.php?ma_VT=<?= $vattu['ma_VT']?>" class="btn btn-edit"><i class="fas fa-edit"></i>Sửa</a>
                                <form action="../../modules/Vat_TU/deleteVT.php" method="post" class="delete-form">
                                    <input type="hidden" name="ma_VT" value="<?php echo $vattu['ma_VT']; ?>">
                                    <button type="submit" class="btn btn-delete"><i class="fas fa-trash"></i> Xoá</button>
                                </form>
                                
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <?php } else{ ?>
                    <div class="empty-state">
                        <h2><i class="fas fa-inbox"></i> Không có vật liệu nào trong kho.</h2>
                    </div>
                <?php } ?>

            </div>
        </main>
    </div>
    <script>
    // Lấy tất cả form có class delete-form
    document.querySelectorAll('.delete-form').forEach(function(form) {
        form.addEventListener('submit', function(event) {
            const confirmDelete = confirm("Bạn có chắc chắn muốn xoá vật tư này?");
            if (!confirmDelete) {
                event.preventDefault(); // chặn submit nếu người dùng chọn Cancel
            }
        });
    });
</script>
</body>
</html>
