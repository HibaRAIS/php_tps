
<?php
 session_start();
 include('dbcon.php'); 
 ?>
<?php
$sql ="UPDATE PRODUIT
SET Prix= 880
WHERE id=3";
$conn->exec($sql);

?>
<?php
// Creation de table
// $sql = "CREATE TABLE PRODUIT (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     Pnom VARCHAR(30) ,
//     Couleur VARCHAR(30) ,
//     Poids VARCHAR(20),
//     Prix INT(5)
//     )";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Table Produit created successfully";



// REMPLIR LA TABLE

    // try {
        
        // begin the transaction
        // $conn->beginTransaction();
        // // our SQL statements
        // $conn->exec("INSERT INTO PRODUIT (Pnom, Couleur,Poids,Prix)
        // VALUES ('PROD1', 'ROUGE', '500g','500')");
        // $conn->exec("INSERT INTO PRODUIT (Pnom, Couleur,Poids,Prix)
        // VALUES ('PROD2', 'VERT', '600g','400')");
        // $conn->exec("INSERT INTO PRODUIT (Pnom, Couleur,Poids,Prix)
        // VALUES ('PROD7', 'ROUGE', '500g','500')");
        // $conn->exec("INSERT INTO PRODUIT (Pnom, Couleur,Poids,Prix)
        // VALUES ('PROD8', 'VERT', '600g','400')");
        // $conn->exec("INSERT INTO PRODUIT (Pnom, Couleur,Poids,Prix)
        // VALUES ('PROD3', 'ORANGE', '550g','150')");
        // $conn->exec("INSERT INTO PRODUIT (Pnom, Couleur,Poids,Prix)
        // VALUES ('PROD4', 'VIOLET', '650g','150')");
        // $conn->exec("INSERT INTO PRODUIT (Pnom, Couleur,Poids,Prix)
        // VALUES ('PROD5', 'BLANC', '400g','150')");
        // $conn->exec("INSERT INTO PRODUIT (Pnom, Couleur,Poids,Prix)
        // VALUES ('PROD6', 'NOIR', '450g','150')");
        // commit the transaction
    //     $conn->commit();
    //     echo "New records created successfully";
    //    } catch(PDOException $e) {
    //     // roll back the transaction if something failed
    //     $conn->rollback();
    //     echo "Error: " . $e->getMessage(); }

    ?>
   
  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="card-body">
<table class="table table-bordered table-striped">
    <thead  class="hh" style="background-color:#1d93c3;">
        <tr>
            <th>Numéro du produit</th>
            <th>Nom du produit </th>
            <th>   Couleur du produit    </th>
            <th>    Poid du produit    </th>
            <th>   Prix du produit    </th>
            
        </tr>
    </thead>
    <tbody>
    <?php
    try {
      
        $query = "SELECT * FROM PRODUIT";
        // $query = "SELECT * FROM PRODUIT where Prix>300 order by Prix ";
        // $query = "SELECT Pnom,Couleur  FROM PRODUIT where CAST(Poids as decimal(10,2)) < 5000 order by Prix ";
        // $query = "UPDATE PRODUIT
        // SET Prix= 880
        // WHERE id=3";

        

                                $statement = $conn->prepare($query);
                                $statement->execute();

                                // $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                if($result)
                                {
                                    foreach($result as $row)
                                    {
                                        ?>
                                        <tr>
                                        <td><?= $row['id']; ?></td>
                                             <td><?= $row['Pnom']; ?></td>
                
                                            <td><?= $row['Couleur']; ?></td>
                                            <td><?= $row['Poids']; ?></td>
                                            <td><?= $row['Prix']; ?></td>
                                            </tr>

                                        <?php
                                    }
                                }
       } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
       }





       

       
?>
 </tbody>
                        </table>
                    </div>
                </div>
            </div>
</body>
</html>