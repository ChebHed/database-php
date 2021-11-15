<?php
require 'mysql_connect.php';
$code_select="";
$requete="SELECT CodeGamme FROM gamme;";
if(isset($_GET['sub'])){
    $code_select=$_GET["code"];
}
?>


<html>
<form action= "Afficher_produits.php" method="GET">
    <select name="code">
        <?php
        foreach($db->query($requete) as $row){
            $code = $row['CodeGamme'];
            if($code == $code_select){
                echo "<option value=\"".$code. "\" selected>".$code."</option>"; 
            }
            else{
                echo "<option value=\"".$code. "\">".$code."</option>";
            }
        }
        ?>
   
    </select>
    <input type=submit name="sub" value="ok">
</html>


<?php
    
    
    $strSQL="SELECT NumProduit,Libelle,CodeGamme,Poids,Prix FROM Produit where CodeGamme = '".$code_select."'";
    

    // $strSQL3="SELECT NumProduit,Libelle,CodeGamme,Poids,Prix FROM Produit where CodeGamme like 'PP%'";
    // $strSQL4="SELECT NumProduit,Libelle,CodeGamme,Poids,Prix FROM Produit where CodeGamme like 'SG%'";
    // $i=$_GET["MyRadio"];
?>
<html>
    <head>
    </head>
    <body>
    

    <?php   
        
        echo "<table border =1>";
        echo "<tr>";
        echo "<td>NumProduit</td>";
        echo "<td>Libelle</td>";
        echo "<td>CodeGamme</td>";
        echo "<td>Poids</td>";
        echo "<td>Prix</td>";
        echo "</tr>";

        try{

            foreach($db->query($strSQL) as $row){
                echo "<tr>";
                echo "<td>".$row['NumProduit']. "</td>"; 
                echo "<td>".$row['Libelle']."</td>";
                echo "<td>".$row['CodeGamme']."</td>";
                echo "<td>".$row['Poids']."</td>";
                echo "<td>".$row['Prix']."</td>";
                echo "</tr>";
        
            }
        }catch(PDOException $e){//erreur de co
            print "Erreur : ".$e->getMessage();
            die();
        }


        
        // switch ($i) {
        //     case "CC":
        //         try{
        //             foreach($db->query($strSQL) as $row){
        //                 echo "<tr>";
        //                 echo "<td>".$row['NumProduit']. "</td>"; 
        //                 echo "<td>".$row['Libelle']."</td>";
        //                 echo "<td>".$row['CodeGamme']."</td>";
        //                 echo "<td>".$row['Poids']."</td>";
        //                 echo "<td>".$row['Prix']."</td>";
        //                 echo "</tr>";
                    
        //             }
        //         }catch(PDOException $e){//erreur de co
        //             print "Erreur : ".$e->getMessage();
        //             die();
        //         }
        //         break;
        //     case "PP":
        //         try{

        //             foreach($db->query($strSQL3) as $row){
        //                 echo "<tr>";
        //                 echo "<td>".$row['NumProduit']. "</td>"; 
        //                 echo "<td>".$row['Libelle']."</td>";
        //                 echo "<td>".$row['CodeGamme']."</td>";
        //                 echo "<td>".$row['Poids']."</td>";
        //                 echo "<td>".$row['Prix']."</td>";
        //                 echo "</tr>";
                    
        //             }
        //         }catch(PDOException $e){//erreur de co
        //             print "Erreur : ".$e->getMessage();
        //             die();
        //         }
        //         break;
        //     case "SG":
        //         try{

        //             foreach($db->query($strSQL4) as $row){
        //                 echo "<tr>";
        //                 echo "<td>".$row['NumProduit']. "</td>"; 
        //                 echo "<td>".$row['Libelle']."</td>";
        //                 echo "<td>".$row['CodeGamme']."</td>";
        //                 echo "<td>".$row['Poids']."</td>";
        //                 echo "<td>".$row['Prix']."</td>";
        //                 echo "</tr>";
                    
        //             }
        //         }catch(PDOException $e){//erreur de co
        //             print "Erreur : ".$e->getMessage();
        //             die();
        //         }
        //         break;
        // }
        




    //try{

    //     foreach($db->query($strSQL) as $row){
    //         echo "<tr>";
    //         echo "<td>".$row['NumProduit']. "</td>"; 
    //         echo "<td>".$row['Libelle']."</td>";
    //         echo "<td>".$row['CodeGamme']."</td>";
    //         echo "<td>".$row['Poids']."</td>";
    //         echo "<td>".$row['Prix']."</td>";
    //         echo "</tr>";
        
    //     }
    // }catch(PDOException $e){//erreur de co
    //     print "Erreur : ".$e->getMessage();
    //     die();
    // }
 ?>   
    </table>
</body>
</html>

    

        

