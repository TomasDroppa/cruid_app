<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>


    <?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];

     

            $query = "SELECT * FROM `cenik` WHERE `id` = '$id'";
                
            $result = mysqli_query($connection, $query);

            if(!$result){
                die("query Failed".mysqli_error());
            }
            else{
                
                $row = mysqli_fetch_assoc($result);
                
            
            }
    }   
    ?>


        <?php

            if(isset($_POST['update_sluzba'])){

                if(isset($_GET['id_new'])){
                    $idnew = $_GET['id_new'];
                }

                $slu = $_POST['sl'];
                $cen = $_POST['ce'];
                $d_fo = $_POST['d_f'];

                $query = "UPDATE `cenik` SET `sluzba` = '$slu', `cena` = '$cen', `delka_foceni` = '$d_fo' WHERE `id` = '$idnew'";
            
                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("query Failed".mysqli_error());
                }
            
                else{
                    header('location:index.php?update_msg=Uspesne jsi upravil data');
                }
            }



        ?>


        <form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="sl">Služba</label>
            <input type="text" name="sl" class="form-control" value="<?php echo $row['sluzba'] ?>">

            <label for="ce">Cena</label>
            <input type="text" name="ce" class="form-control" value="<?php echo $row['cena'] ?>">

            <label for="d_f">Délka focení</label>
            <input type="text" name="d_f" class="form-control" value="<?php echo $row['delka_foceni'] ?>">
        </div>
        <input type="submit" class="btn btn-success" name="update_sluzba" value="Upravit">
        </form>





<?php include('footer.php'); ?>



