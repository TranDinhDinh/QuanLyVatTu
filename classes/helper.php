<?php
function validateField($request,$key){
     $labels = [
        'ma_vat_lieu' => 'Mã vật tư',
        'ten_vat_tu' => 'Tên vật tư',
        'dvt' => 'Đơn vị tính',
        'gia_mua' => 'Giá mua',
        'gia_ban' => 'Giá bán',
        'so_luong' => 'Số lượng',
        'nguong_toi_thieu' => 'Ngưỡng tối thiểu',
        'trang_thai' => 'Trạng thái',
        'nha_cung_cap' => 'Nhà cung cấp'
    ];

    $label = isset($labels[$key]) ? $labels[$key] : $key;

    return isset($request[$key]) && $request[$key] != "" ? "" : "$label không được để trống";
}

function validate($request,$keys){
    $results = [];
    foreach($keys as $key){
        $error = validateField($request,$key);
        if($error != ""){
            $results[$key] = $error;
        }
    }

    return $results;
}
