    <?php include('header.php'); ?>
    <?php include('dbcon.php'); ?>
   
        <h2>Služby</h2>
        <table class="table table-hover table-border table-striped">
            <thead>
                <tr>
                    
                    <th>Služba</th>
                    <th>Cena</th>
                    <th>Délka focení</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "select * from `cenik`";
                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("query Failed".mysqli_error());
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                
                                <td><?php echo $row['sluzba']; ?></td>
                                <td><?php echo $row['cena']; ?></td>
                                <td><?php echo $row['delka_foceni']; ?></td>
                            </tr>
                        
                        <?php
                    }
                }



                ?>
                
                
            </tbody>
        </table>
    <?php include('footer.php'); ?>