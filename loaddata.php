<?php
//Start Session and Connect to Database
include('connection.php');

$sql = "SELECT * FROM energy_data";


//shows notes or alert message
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
            
            $name = $row['name'];   
            $phone = $row['phone'];   
            $email = $row['email'];   
            $houseNo = $row['houseNo'];   
            $streetName = $row['streetName'];   
            $state = $row['state'];   
            $lga = $row['lga'];   
            $families = $row['families'];   
            $children = $row['children'];   
            $adults = $row['adults'];   
            $lighting = $row['lighting'];   
            $media = $row['media_equipment'];   
            $others = $row['others'];   
            
            
            echo "
                <tr>
                    <td>$name</td>
                    <td>$phone</td>
                    <td>$email</td>
                    <td>$houseNo</td>
                    <td>$streetName</td>
                    <td>$state</td>
                    <td>$lga</td>
                    <td>$families</td>
                    <td>$children</td>
                    <td>$adults</td>
                    <td>$lighting</td>
                    <td>$media</td>
                    <td>$others</td>
                </tr>
            ";

        }
    }else{
        echo '<div class="alert alert-warning">You have not created any data yet!</div>'; exit;
    }
    
}else{
    echo '<div class="alert alert-warning">An error occured!</div>'; exit;
//    echo "ERROR: Unable to excecute: $sql." . mysqli_error($link);
}
?>
