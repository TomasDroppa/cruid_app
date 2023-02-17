    <?php include('header.php'); ?>
    <?php include('dbcon.php'); ?>
   
        <div class="box1">
            <h2>Služby</h2>
            <!---bootstrap modal-->
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Přidej službu</button>
        </div>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Služba</th>
                    <th>Cena</th>
                    <th>Délka focení</th>
                    <th>Uprvavit</th>
                    <th>Smazat</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM `cenik`";
                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("query Failed".mysqli_error());
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['sluzba']; ?></td>
                                <td><?php echo $row['cena']; ?></td>
                                <td><?php echo $row['delka_foceni']; ?></td>
                                
                                <td><a href="update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Upravit</a></td>
                                <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Smazat</a></td>
                            </tr>
                        
                        <?php
                    }
                }



                ?>
                
                
            </tbody>
        </table>

        <?php

            if(isset($_GET['message'])){
                echo "<h6>".$_GET['message']."</h6>";
            }

        ?>

         <?php

            if(isset($_GET['insert_msg'])){
                echo "<h6>".$_GET['insert_msg']."</h6>";
            }

        ?>

         <?php

        if(isset($_GET['update_msg'])){
            echo "<h6>".$_GET['update_msg']."</h6>";
        }

        ?>

         <?php

        if(isset($_GET['delete_msg'])){
            echo "<h6>".$_GET['delete_msg']."</h6>";
        }

        ?>

        <!-- Modal -->
    <form action="insert_data.php" method="post">   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Přidej službu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
                <div class="form-group">
                    <label for="sl">Služba</label>
                    <input type="text" name="sl" class="form-control">

                    <label for="ce">Cena</label>
                    <input type="text" name="ce" class="form-control">

                    <label for="d_f">Délka focení</label>
                    <input type="text" name="d_f" class="form-control">
                </div>
    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
            <input type="submit" class="btn btn-success" name="add_sluzba" value="Přidat">
        </div>
    </div>
    </div>
    </form>
    <?php include('footer.php'); ?>