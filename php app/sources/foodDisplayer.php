<?php
 include_once "action/dbh.inc.php";
 ?>
<section>
    <h1>These foods have already been created and are in the world for you to find!</h1>

    <div id="foodDisplay">
 
        <table id="foodTable">
        <thead>
        <?php 
        $sql= "SELECT * FROM magicianfood;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if ($resultCheck > 0) {
            while($row = mysqli_fetch_assoc($result)){
                
                echo"<tr>
                <td id=\"foodObj\">  $row[foodName]  </td>
                <td id=\"foodObj\">  $row[foodFlavorText]  </td>
                <td id=\"foodObj\">  $row[foodBuff]  </td>
                <td id=\"foodObj\">  $row[foodBuffStat]  </td>
                <td id=\"foodObj\">  $row[foodDebuff]  </td>
                <td id=\"foodObj\">  $row[foodDebuffStat]  </td>
                
            </tr>";  
            }
        }
    ?>
         
   
            </thead>
        </table>
    </div>
</section>