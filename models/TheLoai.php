<?php
class TheLoai{
    private $id;
    private $tenTheLoai;
    
    public function __construct($id,$tenTheLoai){
        $this->id = $id;
        $this->tenTheLoai = $tenTheLoai;
    }

    public function getId(){
        return $this->id;
    }
    public function getTenTheLoai(){
        return $this->TenTheLoai;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    public function setTenTheLoai($tenTheLoai){
        $this->tenTheLoai = $tenTheLoai;
    }
}