<?php
    class Database {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "webshop";

        private $conn = NULL;
        private $result = NULL;

    public function connectDB (){
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if( !$this->conn){
            echo "kết nối cơ sở dữ liệu thất bại";
            exit();
        } else {

        }
        return $this->conn;

    }
    //function thực thi câu lệnh truy vấn

    public function execute($sql){
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    // lấy toàn bộ dữ liệu

    public function getData() {
        $sql = "SELECT * FROM banner";
        return $this->execute($sql);
    }
        

    }
?>
