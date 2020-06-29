<?php
    include "connection.php";

    $request = $_SERVER['REQUEST_METHOD'];
    
   if($request === "GET") {
        if(isset($_GET['id_kabkota'])){
            $id = $_GET['id_kabkota'];
            $sql = "SELECT * FROM m_ikabkota WHERE ID = '$id_kabkota'";
        } else if(isset($_GET['nama'])){
            $nama = $_GET['nama'];
            $sql = "SELECT * FROM m_ikabkota WHERE Nama = '$nama_kabkota'";
        } else
            $id = $_GET['id'];
            $sql = "SELECT * FROM m_ikabkota WHERE id_propinsi = '$id'";
        
        $query = mysqli_query($connection, $sql);
        
        $item = array();
        while($data = mysqli_fetch_array($query)){
            $item[] = array(
                'ID' => $data['id_kabkota'],
                'Kab/Kota' => $data['nama_kabkota']
            );
        }
        
        $json = array(
            'statusCode' => 200,
            'item' => $item
        );
        
        echo json_encode($json);
    }
?>