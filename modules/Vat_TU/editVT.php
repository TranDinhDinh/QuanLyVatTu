<?php
include_once __DIR__.'/../../DB.php';
include_once __DIR__.'/../../classes/userVattu.php';
include_once __DIR__.'/../../classes/helper.php';
$ma_VT = null;
$vattu = null;
if($_GET['ma_VT']){
    $ma_VT = $_GET['ma_VT'];
    $vattu = Vattu::find($ma_VT);
   
}else{
    // nếu không có mã vật tư, chuyển hướng về trang danh sách
    header("Location: ./VatTu.php");
    exit;
}

// Lấy danh sách nhà cung cấp
$sqlNCC = "SELECT ma_NCC, ten_NCC FROM nhacungcap";
$nhacungcaps = DB::execute($sqlNCC);

$errors = [];



// xử lý sửa vật tư
if(isset($_POST['edit'])){
    $errors = validate($_POST,['ma_vat_lieu','ten_vat_tu','dvt','gia_mua','gia_ban','so_luong','nguong_toi_thieu','trang_thai']);
    if(count($errors)<=0){
        $dataUpdate = [
            'ma_VT' => $_POST['ma_vat_lieu'],
            'ten_VT' => $_POST['ten_vat_tu'],
            'DVT' => $_POST['dvt'],
            'giaNhap' => $_POST['gia_mua'],
            'giaBan' => $_POST['gia_ban'],
            'soLuong' => $_POST['so_luong'],
            'nguongToiThieu' => $_POST['nguong_toi_thieu'],
            'trangThaiVT' => $_POST['trang_thai'] ,
             'ma_NCC' => $_POST['nha_cung_cap']
        ];
    

        $created = Vattu::update($dataUpdate);
        $_SESSION['message'] = "Sửa vật tư thành công!";
        $errors = [];
        header("Location: ./VatTu.php");
        exit;

    }
}

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Vật liệu - Quản lý Vật tư In ấn</title>
     <link rel="stylesheet" href="../../assets/CSS/style.css">
    <link rel="stylesheet" href="../../assets/CSS/addvt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
     <?php include '../../includes/left.php'; ?>
     <?php include '../../includes/right.php'; ?>

        <!-- Main Content -->
        <main class="main-content">
            <div class="form-container">
                <h1>Sửa vật liệu</h1>

                <form method="post" action="" class="form">
                    <div class="form-wrapper">
                        <!-- Column 1: Mã, Tên, DVT, Giá mua, Giá bán -->
                        <div class="form-column">
                            <div class="form-group">
                                <label for="ma_vat_lieu">Mã vật liệu *</label>
                                <input type="text" id="ma_vat_lieu" name="ma_vat_lieu" value="<?php echo $vattu['ma_VT']; ?>">
                                <div id="maVT" class="text_danger">
                                    <?php echo isset($errors['ma_vat_lieu']) ? ($errors['ma_vat_lieu']):""  ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ten_vat_tu">Tên vật tư *</label>
                                <input type="text" id="ten_vat_tu" name="ten_vat_tu" value="<?php echo $vattu['ten_VT']; ?>">
                                <div id="tenVT" class="text_danger">
                                    <?php echo isset($errors['ten_vat_tu']) ? ($errors['ten_vat_tu']):""  ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dvt">Đơn vị tính</label>
                                <input type="text" id="dvt" name="dvt" value="<?php echo $vattu['DVT']; ?>">
                                <div id="DVT" class="text_danger">
                                    <?php echo isset($errors['dvt']) ? ($errors['dvt']):""  ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gia_mua">Giá mua (VNĐ)</label>
                                <input type="number" id="gia_mua" name="gia_mua" step="0.01" min="0" value="<?php echo $vattu['giaNhap']; ?>">
                                <div id="giaMua" class="text_danger">
                                    <?php echo isset($errors['gia_mua']) ? ($errors['gia_mua']):""  ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gia_ban">Giá bán (VNĐ)</label>
                                <input type="number" id="gia_ban" name="gia_ban" step="0.01" min="0" value="<?php echo $vattu['giaBan']; ?>">
                                <div id="giaban" class="text_danger">
                                    <?php echo isset($errors['gia_ban']) ? ($errors['gia_ban']):""  ?>
                                </div>
                            </div>
                        </div>

                        <!-- Column 2: Số lượng, Ngưỡng tối thiểu, Trạng thái -->
                        <div class="form-column">
                            <div class="form-group">
                                <label for="so_luong">Số lượng</label>
                                <input type="number" id="so_luong" name="so_luong" min="0" value="<?php echo $vattu['soLuong']; ?>">
                                <div id="soLuong" class="text_danger">
                                    <?php echo isset($errors['so_luong']) ? ($errors['so_luong']):""  ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nguong_toi_thieu">Ngưỡng tối thiểu</label>
                                <input type="number" id="nguong_toi_thieu" name="nguong_toi_thieu" min="0" value="<?php echo $vattu['nguongToiThieu']; ?>">
                                <div id="nguongToiThieu" class="text_danger">
                                    <?php echo isset($errors['nguong_toi_thieu']) ? ($errors['nguong_toi_thieu']):""  ?>
                                </div>
                            </div>

                          <div class="form-group">
                                <label for="trang_thai">Trạng thái</label>
                                <select id="trang_thai" name="trang_thai">
                                    <option value="Thanh toán" 
                                        <?php echo ($vattu['trangThaiVT'] == 'Thanh toán') ? 'selected' : ''; ?>>
                                        Thanh toán
                                    </option>
                                    <option value="Chưa thanh toán" 
                                        <?php echo ($vattu['trangThaiVT'] == 'Chưa thanh toán') ? 'selected' : ''; ?>>
                                        Chưa thanh toán
                                    </option>
                                </select>
                                <div id="trangThai" class="text_danger">
                                    <?php echo isset($errors['trang_thai']) ? $errors['trang_thai'] : ""; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nha_cung_cap">Nhà cung cấp</label>
                                <select id="nha_cung_cap" name="nha_cung_cap">
                                    <?php foreach($nhacungcaps as $ncc){ ?>
                                       <option value="<?php echo $ncc['ma_NCC']; ?>"
                                        <?php echo ($vattu['ma_NCC'] == $ncc['ma_NCC']) ? 'selected' : ''; ?>>
                                        <?php echo $ncc['ten_NCC']; ?>
                                        </option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="submit" name="edit" class="btn-primary">Sửa vật tư</button>
                        <a href="VatTu.php" class="btn-secondary">Hủy</a>
                    </div>
                </form>
            </div>
           
        </main>
    </div>
</body>
</html>

