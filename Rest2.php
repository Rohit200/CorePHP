<?php
if(isset($_POST['id']))
{
    $name=$_REQUEST['id'];
    $id=$name;
    $n=$_REQUEST["vd"];
    //echo $n."<br>";
    $conn = new mysqli("localhost", "root", "bridgeit", "Test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    if($n==1)
    {
    $sql = "SELECT * FROM Test.Employee WHERE ID=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   echo " id: " . $row["ID"]."<br>". 
" Name: " . $row["Name"]."<br>". 
" Mobile No :". $row["Mobile"]."<br>".
" Email Id :". $row["EmailId"]. "<br>";

   }
} else {
   echo "0 results";
}

}
else if($n==2)
{
    $sql1 = "SELECT * FROM Test.Employee WHERE ID=$id";
             $result = $conn->query($sql1);
             if ($result->num_rows > 0) {
            $sql = "DELETE FROM `Test`.`Employee` WHERE Id=$ID";
            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully \n";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }else
        echo "Sorry something wrong \n";
}
}
}
else
echo "Something wrong <br>";
    ?>