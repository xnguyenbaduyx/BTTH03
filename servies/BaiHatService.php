<?php
class BaiHatService{
    public function getAllBaiHat(){
        //b1:ket noi database
        try{
            $conn = new PDO('mysql:host=localhost,dbname=hms','root','');
            //b2:try van du lieu
            $sql = "SELECT * FORM baihat";
            $stmt = $conn->query($sql);

            //b3: xu ly ket qua tra ve
            $baihats = [];
            while($row = $stmt->fetch()){
                $baihat = new BaiHat($row['id'],$row['tenBaiHat'],$row['caSi'],$row['idTheLoai']);
                $baihats[] = $BaiHat;
            }
            return $baihats;
        }catch(PDOException $e){
        return $baihats = [];
    }
}
}