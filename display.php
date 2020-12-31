<?php


     include('coonection.php');
     error_reporting(0);


    $sql="SELECT id,username,password FROM piud";

    $result=$conn->query($sql);

    if($result->num_rows>0){
        ?>
        <table border="5px" bordercolor="pink" style="width:400px"  align="center">
        <tbody style="text-align:center;color:red;height:200px" >
        <tr style="color:green">
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>

        </tr>
       
        <?php
        while($row=$result->fetch_assoc()){
            // echo "<br>";
            // echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
            echo "
            <tr style='color:green'>
                <td  >".$row['id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['password']."</td>

           </tr> ";
        }
    }
    else{
        echo "Connection failed";
    }
    $conn->close();

 








?>
</tbody>
   </table>