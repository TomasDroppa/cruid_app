<?php
include 'dbcon.php';

if(isset($_POST['add_sluzba'])){

    $slu = $_POST['sl'];
    $cen = $_POST['ce'];
    $d_fo = $_POST['d_f'];

    //validation
    if($slu == "" || empty($slu)){
        header('location:index.php?message=musis vyplnit službu');
    }elseif ($cen == "" || empty($cen)) {
        header('location:index.php?message=musis vyplnit cenu');
    }elseif ($d_fo == "" || empty($d_fo)) {
        header('location:index.php?message=musis vyplnit dobu');
    }
    

    else{
        $query = "INSERT INTO `cenik`(`sluzba`, `cena`, `delka_foceni`) VALUES ('$slu', '$cen', '$d_fo')";

        $result = mysqli_query($connection,$query);

        if(!$result){
            die("Query Failed".mysqli_error());
        }
        else{
            header('location:index.php?insert_msg=Data byla uspesne pridana');
        }
    }

    

}




?>