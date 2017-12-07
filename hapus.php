<?php
    include "DB.php";
    $dbku=new DB();
    $koneksi=$dbku->open();
    
    $nim=$_GET['nim'];
     
    $sql="DELETE FROM mahasiswa where nim='$nim'";

    mysqli_query($koneksi,$sql) or die('Gagal ekseskusi SQL :' . $sql );

    header("Location:http://localhost/webb4/showdata.php");
?>