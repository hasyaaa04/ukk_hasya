<?php
require_once "../connection.php";

Class Pinjam extends Connection{

    public function get_ulasan($id){
        $sql = "SELECT * FROM ulasanbuku LEFT JOIN buku ON buku.BukuID = ulasanbuku.BukuID LEFT JOIN user ON user.UserID = ulasanbuku.UserID WHERE buku.BukuID =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = [];
        while($fetch = $result->fetch_assoc()){
            $row[] = $fetch;            
        }
        
        return $row;
    }
}