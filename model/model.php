<?php
namespace model;

class model {
    public $connect;

    static function connect_db() {
        
        return mysqli_connect('localhost','root','','gym');
        
    }

    public function connect_tes() {
        if (mysqli_connect_errno()) {
            echo "Koneksi Gagal :" . mysqli_connect_errno(); 
        } 
    }

}
