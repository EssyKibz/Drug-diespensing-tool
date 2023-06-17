<?php
$servername = "localhost";
$username = "root";
$dbname="drug_dispenser";
$password = '';


// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="SELECT*  from patients";
$result =$conn->query($sql);
print_r ($result);
if($result->num_rows>0){
    while($row=$result->Fetch_assoc()){
        echo "SSN: ".$row["SSN"]." Name: ".$row["Name"]."Address: ".$row["Address"]."Ages".$row["Ages"]."<br>";
    }
    }else{
        echo "0 results";
    }



if($conn->query($sql)=== TRUE){
   
  echo "New Record created successfully";}

    else{
        echo"ERROR: " .$sql. "<br>" .mysqli_error($conn);
    }
    $conn->close();
?>