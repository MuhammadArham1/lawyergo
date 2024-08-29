<?php
       include('db.php');
       $case = $_GET['case'] ;
       $query = "DELETE FROM case_tb WHERE `case`= '$case'";
       $row = mysqli_query($con,$query);


       if($row)
       {
            echo"run";
           echo"<script>location.replace('dashboard.php');</script>";
       }

       else
       {
        echo"Error";
       }
?>     
