<?php

    function connection(){
        //  XAMPP
        $host = "localhost";
        $username = "root";
        $password = "12345";
        $database = "client_database";
        
        // InfinityFree
        // $host = "sql310.epizy.com";
        // $username = "epiz_31412731";
        // $password = "iPe28kJ2T2mc";
        // $database = "epiz_31412731_stakeholder_datebase";
                
        $con = new mysqli($host,$username,$password,$database);
                
        if($con->connect_error){
          echo $con->connect_error;
        }else{
            return $con;
        }


        

    }
  
    
 
?>