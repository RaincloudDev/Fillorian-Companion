<!--this page displays the users backpack after logging in-->
<?php
 include_once "action/dbh.inc.php";
 ?>
<section id="backpackWrap">
    <div id="backpack">
        <div id="ownedItems">
            <!--scroll box inventory-->
            <h4>Player Character's Backpack</h4>
            <p>The Following items are in your posession! (Actually though these are all the items created by players which Buff HP!)</p>

            
 

<!--copied from foodDisplayer to test showing items with an associated value, IE Character Name-->
        <div id="foodDisplay">
        <table id="foodTable">
        <thead>
        <?php 
        $sql= "SELECT * FROM magicianfood WHERE foodBuffStat = 'HP';";
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

<!--end of test table-->

<!--moneyPurse-->

        </div>
        <div id="ownedCoin">
            <section id="ownedDewey">
            <li id="coinName">DeweyCoins</li>
            <p>0</p>
            </section>

            <section id="ownedDollars">
            <li id="coinName">DollarBills</li>
            <p>0</p>
            </section>
            
            <section id="owedFilloryMoney">
            <li id="coinName">FillBills</li>
            <p>0</p>
            </section>
            
        </div>
    </div>    
</section>