<?php
        require "init.php";//needed for connection with database
        

    //      $response = array();
    //      $count = 0;
    //      $sql_query =  "SELECT * FROM `data_db`";//SQL command
    //      $result = mysqli_query($con,$sql_query);
    //     while($row=mysqli_fetch_array($result)){
    //         //  echo  nl2br($row[0] .":". $row[1].":".$row[2].":".$row[3].":".$row[4]."\n");//returning results 
    //         $count = $count + 1;
    //         $response[$count] = array("id"=>$row[0], "name"=>$row[1],"tal"=>$row[2],"taal"=>$row[3],"euc"=>$row[4]);
    //     }
    //     echo json_encode(array("table_"=>$response));

    //     echo ":";
    //     $count = 0;
    //     $sql_query =  "SELECT * FROM `data_gala` ";//SQL command
    //     $result = mysqli_query($con,$sql_query);
    //    while($row=mysqli_fetch_array($result)){
    //         //  echo $row[0] ."`". $row[1]."`".$row[2];//returning results 
    //         //  echo nl2br("<td class=body-item mbr-fonts-style display-7>".$row[0] ."</td><td class=body-item mbr-fonts-style display-7>".$row[1] ."</td><td class=body-item mbr-fonts-style display-7>".$row[2] ."</td></tr>");
    //         $response[$count] = array("name"=>$row[0], "teol"=>$row[1],"bua"=>$row[2]);
    //    }
    //    echo json_encode(array("table_"=>$response));

    //    echo ":";
    //    $count = 0;
    //     $sql_query =  "SELECT * FROM `data_iemini` ";//SQL command
    //     $result = mysqli_query($con,$sql_query);
    //    while($row=mysqli_fetch_array($result)){
    //        //  echo  nl2br($row[0] .":". $row[1].":".$row[2].":".$row[3].":".$row[4]."\n");//returning results 
    //         // echo nl2br("<td class=body-item mbr-fonts-style display-7>".$row[0] ."</td><td class=body-item mbr-fonts-style display-7>".$row[1] ."</td><td class=body-item mbr-fonts-style display-7>".$row[2] ."</td><td class=body-item mbr-fonts-style display-7>".$row[3] ."</td></tr><tr>");
    //         $response[$count] = array("name"=>$row[0], "la"=>$row[1],"ld"=>$row[2],"nap"=>$row[3]);
    //    }
    //    echo json_encode(array("table_"=>$response));

    //    echo ":";
       $count = 0;
        $sql_query =  "SELECT * FROM `data_mie`  ";//SQL command
        $result = mysqli_query($con,$sql_query);
       while($row=mysqli_fetch_array($result)){
           //  echo  nl2br($row[0] .":". $row[1].":".$row[2].":".$row[3].":".$row[4]."\n");//returning results 
             echo json_encode("<td class=&quot;body-item mbr-fonts-style display-7&quot;>".$row[0] ."</td><td class=&quot;body-item mbr-fonts-style display-7&quot;>".$row[1] ."</td><td class=&quot;body-item mbr-fonts-style display-7&quot;>".$row[2] ."</td></tr><tr>");
            // $response[$count] = array("name"=>$row[0], "des"=>$row[1],"tas"=>$row[2]);
       }
    //    echo json_encode(array("table_"=>$response));

       
?> 