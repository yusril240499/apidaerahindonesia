<?php
    include "connection.php";

    $request = $_SERVER['REQUEST_METHOD'];
    
   if($request === "GET") {
        if(isset($_GET['id_propinsi'])){
            $id = $_GET['id_propinsi'];
            $sql = "SELECT * FROM m_ipropinsi WHERE ID = '$id_propinsi'";
        } else if(isset($_GET['nama'])){
            $nama = $_GET['nama'];
            $sql = "SELECT * FROM m_ipropinsi WHERE Nama = '$nama_propinsi'";
        } else
            $sql = "SELECT * FROM m_ipropinsi";
        
        $query = mysqli_query($connection, $sql);
        
        $item = array();
        while($data = mysqli_fetch_array($query)){
            $item[] = array(
                'ID' => $data['id_propinsi'],
                'Provinsi' => $data['nama_propinsi']
            );
        }
        
        $json = array(
            'statusCode' => 200,
            'item' => $item
        );
        
        echo json_encode($json);
    }
?>