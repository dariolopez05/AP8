<?php

class Modelo extends Connection {
    
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    function getAllProducts() {
        $query = "SELECT * FROM `PRODUCTO`";
        $result = mysqli_query($this->conn, $query);
        $data = $result->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    function showAllProducts() {
        $products = $this->getAllProducts();
        
}

?>