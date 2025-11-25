<?php
include_once __DIR__.'/../DB.php';

class Vattu {
    static public function All(){
        $sql = "SELECT vattu.ma_VT, vattu.ten_VT, vattu.DVT, vattu.giaNhap, vattu.giaBan,
                       vattu.soLuong, vattu.nguongToiThieu, vattu.trangThaiVT,
                       nhacungcap.ten_NCC
                FROM vattu
                INNER JOIN nhacungcap ON vattu.ma_NCC = nhacungcap.ma_NCC";
        return DB::execute($sql);
    }

    static public function create($CreateData){
        $sql = 'INSERT INTO vattu (ma_VT, ten_VT, DVT, giaNhap, giaBan, soLuong, nguongToiThieu, trangThaiVT, ma_NCC)
                VALUES (:ma_VT, :ten_VT, :DVT, :giaNhap, :giaBan, :soLuong, :nguongToiThieu, :trangThaiVT, :ma_NCC)';
        DB::execute($sql, $CreateData);
    }
    static public function find($ma_VT){
        $sql = "SELECT *
                FROM vattu
                WHERE vattu.ma_VT = :ma_VT";
        $dataFind = ['ma_VT' => $ma_VT];
        $result = DB::execute($sql, $dataFind);
        return count($result) > 0 ? $result[0] : [];
    }
    static public function update($UpdateData){
        $sql = "UPDATE vattu
                SET ten_VT = :ten_VT,
                    DVT = :DVT,
                    giaNhap = :giaNhap,
                    giaBan = :giaBan,
                    soLuong = :soLuong,
                    nguongToiThieu = :nguongToiThieu,
                    trangThaiVT = :trangThaiVT,
                    ma_NCC = :ma_NCC
                WHERE ma_VT = :ma_VT";
        DB::execute($sql, $UpdateData);
    }
    static public function delete($ma_VT){
        $sql = "DELETE FROM vattu
                WHERE ma_VT = :ma_VT";
        $dataDelete = ['ma_VT' => $ma_VT];
        DB::execute($sql, $dataDelete);
    }
}
