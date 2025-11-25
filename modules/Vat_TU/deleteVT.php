
<?php
include_once __DIR__.'/../../classes/userVattu.php';
if(isset($_POST['ma_VT'])){
    $ma_VT = $_POST['ma_VT'];
    Vattu::delete($ma_VT);
    $_SESSION['message'] = "Xoá vật tư thành công!";
    header("Location: ./VatTu.php");
    exit;
}else{
    $_SESSION['message'] = "Lỗi: Không tìm thấy mã vật tư để xoá.";
    header("Location: ./VatTu.php");
    exit;
}