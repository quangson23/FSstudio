<?php 
require_once "BaseModel.php";
class BaiDang extends BaseModel{
    //bài đăng
    public function AllBaidang(){
        $sql = "SELECT * FROM tb_baidang";
        return $this->SqlExecute($sql);
    }
    public function thembaiviet($tieu_de,$noi_dung,$path,$username){
        $sql = "INSERT INTO tb_baidang(tieu_de, noi_dung, ngay_dang, path, username) 
        VALUES ('$tieu_de','$noi_dung',NOW(),'$path','$username')";
        return $this->SqlExecute($sql);
    }
    public function xoaBaiViet($id){
        $sql = "DELETE FROM tb_baidang WHERE id_bai_dang = $id";
        return $this->SqlExecute($sql);
    }
    public function hienthi($id){
        $sql ="SELECT * FROM tb_baidang WHERE id_bai_dang= $id";
        return $this->SqlExecute($sql, 1);
    }
    public function suaBaiViet($id,$tieu_de,$noi_dung,$path,$username){
        $sql = "UPDATE tb_baidang SET tieu_de='$tieu_de',noi_dung='$noi_dung',path='$path',username='$username' WHERE id_bai_dang= $id";
        return $this->SqlExecute($sql, 1);
    }
    public function suaBaiViet2($id,$tieu_de,$noi_dung,$username){
        $sql = "UPDATE tb_baidang SET tieu_de='$tieu_de',noi_dung='$noi_dung',username='$username' WHERE id_bai_dang= $id";
        return $this->SqlExecute($sql, 1);
    }

}

?>