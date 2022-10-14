<?php
  function createfood($conn, $foodName, $foodFlavorText, $foodBuff, $foodBuffStat, $foodDebuff, $foodDebuffStat){
      $sql = "INSERT INTO `magicianfood`(`foodName`, `foodFlavorText`, `foodBuff`, `foodBuffStat`, `foodDebuff`, `foodDebuffStat`) VALUES  (?, ?, ?, ?, ?, ?);";

      
      $statement = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($statement, $sql)) {
          header("location: ../createfood.php?error?FAILURE");
          exit();
          echo "FAILURE";
      }


     

      mysqli_stmt_bind_param($statement, "ssssss", $foodName, $foodFlavorText, $foodBuff, $foodBuffStat, $foodDebuff, $foodDebuffStat);
      mysqli_stmt_execute($statement);
      mysqli_stmt_close($statement);

      exit();
  }

  